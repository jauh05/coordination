@php
    $currentUser = auth()->user();
    $currentUserName = $currentUser ? $currentUser->name : 'Pengguna Umum';
    $currentDivisionName = 'Umum';
    if ($currentUser) {
        $eventUser = \App\Models\EventUser::where('user_id', $currentUser->id)->first();
        if ($eventUser && $eventUser->division) {
            $currentDivisionName = $eventUser->division->name;
        }
    }
@endphp

<x-layouts.app title="Perencanaan Strategis">
    <div x-data="kanbanBoard()" x-init="initBoard()" class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg h-[calc(100vh-80px)]" x-cloak>
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4 shrink-0">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Papan Perencanaan</h2>
                <div class="flex items-center gap-2 mt-1">
                    <span class="font-body-md text-body-md text-text-secondary">Tampilan untuk:</span>
                    <select class="bg-surface border border-border-subtle text-primary font-semibold rounded-lg px-2 py-1 text-sm outline-none">
                        <option>Semua Event Aktif</option>
                        <option>Summer Tech Expo 2024</option>
                        <option>Annual Gala 2024</option>
                    </select>
                </div>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-2 bg-surface border border-border-subtle px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">view_timeline</span> Tampilan Gantt
                </button>
                <button @click="openAddModal()" class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">add</span> Tambah Tugas
                </button>
            </div>
        </section>

        <!-- KANBAN BOARD -->
        <section class="flex-1 overflow-x-auto pb-4 custom-scrollbar">
            <div class="flex gap-6 h-full min-w-max">
                
                <template x-for="column in columns" :key="column.id">
                    <!-- Column -->
                    <div class="w-80 flex flex-col gap-4">
                        <div class="flex items-center justify-between px-2">
                            <h3 class="font-headline-sm text-headline-md text-on-surface flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full border" :class="column.dotColor"></span>
                                <span x-text="column.name"></span>
                            </h3>
                            <span class="bg-surface-container-low text-text-secondary px-2 py-0.5 rounded-full font-label-sm text-label-sm" x-text="getTasksByColumn(column.id).length"></span>
                        </div>
                        
                        <div 
                            class="bg-surface-container-low p-2 rounded-2xl flex-1 flex flex-col gap-3 overflow-y-auto custom-scrollbar border border-border-subtle border-dashed min-h-[300px]"
                            @dragover.prevent="dragOverColumn($event)"
                            @drop="dropTask(column.id)"
                        >
                            <template x-for="task in getTasksByColumn(column.id)" :key="task.id">
                                <!-- Task Card -->
                                <div 
                                    class="bg-surface p-4 rounded-xl shadow-sm border border-border-subtle hover:border-primary/50 hover:shadow-md transition-all cursor-grab active:cursor-grabbing group relative"
                                    draggable="true"
                                    @dragstart="dragStart(task.id)"
                                    @dragend="dragEnd()"
                                >
                                    <div class="flex justify-between items-start mb-2">
                                        <span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-[10px] uppercase font-bold tracking-wider" x-text="task.project"></span>
                                        <div class="flex items-center gap-1">
                                            <button @click="openEditModal(task)" class="text-text-secondary hover:text-primary p-0.5 rounded transition-colors">
                                                <span class="material-symbols-outlined text-[16px]">edit</span>
                                            </button>
                                            <button @click="deleteTask(task.id)" class="text-text-secondary hover:text-error p-0.5 rounded transition-colors">
                                                <span class="material-symbols-outlined text-[16px]">delete</span>
                                            </button>
                                        </div>
                                    </div>
                                    <h4 class="font-label-md text-label-md text-on-surface mb-2 font-semibold" x-text="task.title"></h4>
                                    
                                    <!-- Tags list -->
                                    <div class="flex flex-wrap gap-1 mb-3">
                                        <template x-for="tag in task.tags" :key="tag">
                                            <span 
                                                class="px-2 py-0.5 rounded-full text-[9px] font-bold text-white shadow-sm"
                                                :class="getTagColorClass(tag)"
                                                x-text="tag"
                                            ></span>
                                        </template>
                                    </div>

                                    <div class="flex justify-between items-center mt-2">
                                        <div class="flex items-center gap-1 font-label-sm text-label-sm" :class="getPriorityClass(task.priority)">
                                            <span class="material-symbols-outlined text-[14px]">flag</span>
                                            <span x-text="task.priority"></span>
                                            <span class="text-text-secondary ml-1">• PJ: <span class="font-semibold" x-text="task.assigneeName"></span></span>
                                        </div>
                                        <!-- Column Status Icon Badge (replacing photo) -->
                                        <div 
                                            class="w-6 h-6 rounded-full flex items-center justify-center shadow-sm"
                                            :class="getColumnStatusBadge(task.columnId).class"
                                            :title="getColumnStatusBadge(task.columnId).title"
                                        >
                                            <span class="material-symbols-outlined text-[12px]" x-text="getColumnStatusBadge(task.columnId).icon"></span>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>

            </div>
        </section>

        <!-- ADD/EDIT TASK MODAL -->
        <div x-show="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4 transition-opacity" x-transition>
            <div class="bg-surface rounded-2xl w-full max-w-lg shadow-2xl border border-border-subtle flex flex-col max-h-[90vh] overflow-hidden" @click.away="showModal = false">
                <!-- Modal Header -->
                <div class="px-6 py-4 border-b border-border-subtle flex justify-between items-center bg-surface-container-low">
                    <h3 class="font-bold text-on-surface text-lg" x-text="modalMode === 'add' ? 'Tambah Tugas Baru' : 'Edit Tugas'"></h3>
                    <button @click="showModal = false" class="text-text-secondary hover:text-on-surface">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                
                <!-- Modal Body (Form) -->
                <div class="p-6 space-y-4 overflow-y-auto custom-scrollbar flex-1">
                    <div>
                        <label class="block text-xs font-bold text-outline uppercase mb-1">Judul Tugas</label>
                        <input type="text" x-model="modalTask.title" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="Masukkan judul tugas...">
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-outline uppercase mb-1">Kategori / Nama Event (Divisi)</label>
                        <input type="text" x-model="modalTask.project" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="Contoh: Internal Retreat, Annual Gala...">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-outline uppercase mb-1">Kolom Status</label>
                            <select x-model="modalTask.columnId" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                <template x-for="col in columns" :key="col.id">
                                    <option :value="col.id" x-text="col.name"></option>
                                </template>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-outline uppercase mb-1">Prioritas</label>
                            <select x-model="modalTask.priority" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                <option value="Tinggi">Tinggi</option>
                                <option value="Medium">Medium</option>
                                <option value="Rendah">Rendah</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-outline uppercase mb-1">Nama Penanggung Jawab</label>
                        <input type="text" x-model="modalTask.assigneeName" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="Nama Penanggung Jawab...">
                    </div>

                    <!-- Label / Tanda (Multiple Tags Select) -->
                    <div>
                        <label class="block text-xs font-bold text-outline uppercase mb-2">Tanda / Label (Bisa Pilih Banyak)</label>
                        <div class="flex flex-wrap gap-2 p-3 bg-surface-container-low rounded-xl border border-border-subtle max-h-36 overflow-y-auto custom-scrollbar">
                            <template x-for="tag in Object.keys(allTags)" :key="tag">
                                <button 
                                    type="button"
                                    @click="toggleTag(tag)"
                                    class="px-2.5 py-1 rounded-full text-xs font-bold transition-all flex items-center gap-1 border shadow-sm"
                                    :class="modalTask.tags.includes(tag) 
                                        ? getTagColorClass(tag) + ' text-white border-transparent' 
                                        : 'bg-white border-border-subtle text-text-secondary hover:bg-surface-container-high'"
                                >
                                    <span x-text="tag"></span>
                                    <template x-if="modalTask.tags.includes(tag)">
                                        <span class="material-symbols-outlined text-[12px] font-bold">check</span>
                                    </template>
                                </button>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="px-6 py-4 border-t border-border-subtle bg-surface-container-low flex justify-end gap-2">
                    <button @click="showModal = false" class="px-4 py-2 border border-border-subtle rounded-lg text-sm text-text-secondary hover:bg-surface-container transition-colors">Batal</button>
                    <button @click="saveTask()" class="px-4 py-2 bg-primary text-white rounded-lg text-sm font-semibold hover:brightness-110 transition-colors">Simpan</button>
                </div>
            </div>
        </div>

    </div>

    <script>
        function kanbanBoard() {
            return {
                currentUserName: '{{ $currentUserName }}',
                currentUserDivision: '{{ $currentDivisionName }}',
                columns: [
                    { id: 'ideasi', name: 'Ideasi', dotColor: 'bg-surface-variant border-outline' },
                    { id: 'persiapan', name: 'Persiapan', dotColor: 'bg-warning border-warning/50' },
                    { id: 'eksekusi', name: 'Eksekusi', dotColor: 'bg-primary border-primary/50' },
                    { id: 'selesai', name: 'Selesai', dotColor: 'bg-success border-success/50' }
                ],
                tasks: [],
                allTags: {
                    'Urgent': 'bg-red-500 hover:bg-red-600',
                    'Penting': 'bg-orange-500 hover:bg-orange-600',
                    'Normal': 'bg-blue-500 hover:bg-blue-600',
                    'Rendah': 'bg-gray-500 hover:bg-gray-600',
                    'Internal': 'bg-purple-500 hover:bg-purple-600',
                    'Eksternal': 'bg-indigo-500 hover:bg-indigo-600',
                    'Sponsor': 'bg-teal-500 hover:bg-teal-600',
                    'Logistik': 'bg-amber-500 hover:bg-amber-600',
                    'Acara': 'bg-pink-500 hover:bg-pink-600',
                    'Konsumsi': 'bg-emerald-500 hover:bg-emerald-600',
                    'Keamanan': 'bg-slate-500 hover:bg-slate-600',
                    'Perlengkapan': 'bg-cyan-500 hover:bg-cyan-600',
                    'Publikasi': 'bg-violet-500 hover:bg-violet-600',
                    'Dokumentasi': 'bg-rose-500 hover:bg-rose-600'
                },
                draggedTaskId: null,
                showModal: false,
                modalMode: 'add',
                modalTask: {
                    id: '',
                    title: '',
                    project: '',
                    columnId: 'ideasi',
                    priority: 'Medium',
                    tags: [],
                    assignee: '',
                    assigneeName: ''
                },

                initBoard() {
                    const savedTasks = localStorage.getItem('kanban_tasks');
                    if (savedTasks) {
                        this.tasks = JSON.parse(savedTasks);
                    } else {
                        // Seed default tasks
                        this.tasks = [
                            {
                                id: 'task-1',
                                title: 'Tentukan Lokasi (Bali / Bandung)',
                                project: 'Internal Retreat',
                                columnId: 'ideasi',
                                priority: 'Medium',
                                tags: ['Logistik', 'Internal'],
                                assignee: '',
                                assigneeName: 'Aditya'
                            },
                            {
                                id: 'task-2',
                                title: 'Penyusunan Draft Anggaran',
                                project: 'Internal Retreat',
                                columnId: 'ideasi',
                                priority: 'Rendah',
                                tags: ['Internal', 'Penting'],
                                assignee: '',
                                assigneeName: 'Un'
                            },
                            {
                                id: 'task-3',
                                title: 'Finalisasi Menu Catering Fiesta',
                                project: 'Annual Gala',
                                columnId: 'persiapan',
                                priority: 'Tinggi',
                                tags: ['Konsumsi', 'Acara'],
                                assignee: '',
                                assigneeName: 'Budi'
                            },
                            {
                                id: 'task-4',
                                title: 'Setup Booth & Registrasi',
                                project: 'Tech Expo',
                                columnId: 'eksekusi',
                                priority: 'Tinggi',
                                tags: ['Acara', 'Logistik', 'Urgent'],
                                assignee: '',
                                assigneeName: 'AR'
                            },
                            {
                                id: 'task-5',
                                title: 'Pemilihan Tema Expo',
                                project: 'Tech Expo',
                                columnId: 'selesai',
                                priority: 'Medium',
                                tags: ['Acara'],
                                assignee: '',
                                assigneeName: 'Done'
                            }
                        ];
                        this.saveToStorage();
                    }
                },

                getTasksByColumn(columnId) {
                    return this.tasks.filter(t => t.columnId === columnId);
                },

                getTagColorClass(tag) {
                    return this.allTags[tag] || 'bg-slate-500 hover:bg-slate-600';
                },

                getPriorityClass(priority) {
                    if (priority === 'Tinggi') return 'text-error';
                    if (priority === 'Medium') return 'text-warning';
                    return 'text-text-secondary';
                },

                getInitials(name) {
                    if (!name) return 'U';
                    return name.split(' ').map(n => n[0]).join('').toUpperCase().substring(0, 2);
                },

                getColumnStatusBadge(columnId) {
                    if (columnId === 'ideasi') {
                        return {
                            icon: 'lightbulb',
                            class: 'bg-slate-400 text-white',
                            title: 'Ideasi'
                        };
                    }
                    if (columnId === 'persiapan') {
                        return {
                            icon: 'schedule',
                            class: 'bg-orange-500 text-white',
                            title: 'Persiapan'
                        };
                    }
                    if (columnId === 'eksekusi') {
                        return {
                            icon: 'bolt',
                            class: 'bg-blue-500 text-white',
                            title: 'Eksekusi'
                        };
                    }
                    if (columnId === 'selesai') {
                        return {
                            icon: 'check_circle',
                            class: 'bg-success text-white',
                            title: 'Selesai'
                        };
                    }
                    return {
                        icon: 'help',
                        class: 'bg-slate-400 text-white',
                        title: 'Unknown'
                    };
                },

                dragStart(taskId) {
                    this.draggedTaskId = taskId;
                },

                dragEnd() {
                    this.draggedTaskId = null;
                },

                dragOverColumn(event) {
                    // Allowed
                },

                dropTask(columnId) {
                    if (this.draggedTaskId) {
                        const task = this.tasks.find(t => t.id === this.draggedTaskId);
                        if (task) {
                            task.columnId = columnId;
                            this.saveToStorage();
                        }
                    }
                },

                openAddModal() {
                    this.modalMode = 'add';
                    this.modalTask = {
                        id: 'task-' + Date.now(),
                        title: '',
                        project: this.currentUserDivision,
                        columnId: 'ideasi',
                        priority: 'Medium',
                        tags: [],
                        assignee: '',
                        assigneeName: this.currentUserName
                    };
                    this.showModal = true;
                },

                openEditModal(task) {
                    this.modalMode = 'edit';
                    this.modalTask = JSON.parse(JSON.stringify(task)); // Deep clone
                    this.showModal = true;
                },

                toggleTag(tag) {
                    if (this.modalTask.tags.includes(tag)) {
                        this.modalTask.tags = this.modalTask.tags.filter(t => t !== tag);
                    } else {
                        this.modalTask.tags.push(tag);
                    }
                },

                saveTask() {
                    if (!this.modalTask.title.trim()) {
                        alert('Judul tugas tidak boleh kosong!');
                        return;
                    }
                    if (!this.modalTask.project.trim()) {
                        this.modalTask.project = 'Umum';
                    }

                    if (this.modalMode === 'add') {
                        this.tasks.push(this.modalTask);
                    } else {
                        const index = this.tasks.findIndex(t => t.id === this.modalTask.id);
                        if (index !== -1) {
                            this.tasks[index] = this.modalTask;
                        }
                    }

                    this.saveToStorage();
                    this.showModal = false;
                },

                deleteTask(taskId) {
                    if (confirm('Apakah Anda yakin ingin menghapus tugas ini?')) {
                        this.tasks = this.tasks.filter(t => t.id !== taskId);
                        this.saveToStorage();
                    }
                },

                saveToStorage() {
                    localStorage.setItem('kanban_tasks', JSON.stringify(this.tasks));
                }
            }
        }
    </script>
</x-layouts.app>
