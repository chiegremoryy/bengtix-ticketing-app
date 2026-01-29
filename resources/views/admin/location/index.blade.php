<x-layouts.admin title="Manajemen Lokasi">

    @if (session('success'))
    <div class="toast toast-bottom toast-center">
        <div class="alert alert-success">
            <span>{{ session('success') }}</span>
        </div>
    </div>

    <script>
        setTimeout(() => {
            document.querySelector('.toast')?.remove()
        }, 3000)
    </script>
    @endif

    <div class="container mx-auto p-10">
        <div class="flex">
            <h1 class="text-3xl font-semibold mb-4">Manajemen Lokasi</h1>
            <button class="btn btn-primary ml-auto" onclick="add_modal.showModal()">Tambah Lokasi</button>
        </div>
        <div class="overflow-x-auto rounded-box bg-white p-5 shadow-xs">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="w-3/4">Nama Lokasi</th>
                        <th>Aktif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($locations as $index => $location)
                    <tr>
                        <th>{{ $index + 1 }}</th>
                        <td>{{ $location->nama_lokasi }}</td>
                        <td>{{ $location->aktif }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary mr-2" onclick="openEditModal(this)" data-id="{{ $location->id }}" data-nama="{{ $location->nama_lokasi }}">Edit</button>
                            <button class="btn btn-sm bg-red-500 text-white" onclick="openDeleteModal(this)" data-id="{{ $location->id }}">Hapus</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Tidak ada Lokasi tersedia.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add location Modal -->
    <dialog id="add_modal" class="modal">
        <form method="POST" action="{{ route('admin.locations.store') }}" class="modal-box">
            @csrf

            <h3 class="text-lg font-bold mb-4">Tambah Lokasi</h3>

            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Nama Lokasi</span>
                </label>
                <input
                    type="text"
                    name="nama_lokasi"
                    class="input input-bordered w-full"
                    required />
            </div>

            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Status Lokasi</span>
                </label>
                <select name="aktif" class="select select-bordered w-full" required>
                    <option value="Y">Aktif</option>
                    <option value="N">Non Aktif</option>
                </select>
            </div>

            <div class="modal-action">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn" onclick="add_modal.close()">Batal</button>
            </div>
        </form>
    </dialog>


    <!-- Edit location Modal With Retrieve ID -->
    <dialog id="edit_modal" class="modal">
        <form method="POST" class="modal-box">
            @csrf
            @method('PUT')

            <input type="hidden" name="lokasis_id" id="edit_lokasis_id">

            <h3 class="text-lg font-bold mb-4">Edit Lokasi</h3>

            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Nama Lokasi</span>
                </label>
                <input
                    type="text"
                    name="nama_lokasi"
                    id="edit_lokasis_name"
                    class="input input-bordered w-full"
                    required />
            </div>

            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Status Lokasi</span>
                </label>
                <select name="aktif" id="edit_lokasis_aktif" class="select select-bordered w-full" required>
                    <option value="Y">Aktif</option>
                    <option value="N">Non Aktif</option>
                </select>
            </div>

            <div class="modal-action">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn" onclick="edit_modal.close()">Batal</button>
            </div>
        </form>
    </dialog>

    <!-- Delete Modal -->
    <dialog id="delete_modal" class="modal">
        <form method="POST" class="modal-box">
            @csrf
            @method('DELETE')

            <input type="hidden" name="lokasis_id" id="delete_lokasis_id">

            <h3 class="text-lg font-bold mb-4">Hapus Lokasi</h3>
            <p>Apakah Anda yakin ingin menghapus Lokasi ini?</p>
            <div class="modal-action">
                <button class="btn btn-primary" type="submit">Hapus</button>
                <button class="btn" onclick="delete_modal.close()" type="reset">Batal</button>
            </div>
        </form>
    </dialog>

    <script>
        function openEditModal(button) {
            const name = button.dataset.nama;
            const id = button.dataset.id;
            const form = document.querySelector('#edit_modal form');

            document.getElementById("edit_lokasis_name").value = name;
            document.getElementById("edit_lokasis_id").value = id;

            // Set action dengan parameter ID
            form.action = `/admin/locations/${id}`

            edit_modal.showModal();
        }

        function openDeleteModal(button) {
            const id = button.dataset.id;
            const form = document.querySelector('#delete_modal form');
            document.getElementById("delete_lokasis_id").value = id;

            // Set action dengan parameter ID
            form.action = `/admin/locations/${id}`

            delete_modal.showModal();
        }
    </script>

</x-layouts.admin>