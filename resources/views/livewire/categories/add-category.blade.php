<div>
    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_2">
            New Category
        </button>

        <div class="modal bg-body fade" tabindex="-1" id="kt_modal_2">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content shadow-none">
                    <div class="modal-header">
                        <h5 class="modal-title">Create a new Category</h5>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body">
                        <form wire:submit.prevent="submit">
                            @csrf
                            <div class="mb-10 hover-elevate-up">
                                <label for="categoryName" class="required form-label">Category Name</label>
                                <input type="text" class="form-control form-control-solid" id="categoryName" wire:model="name" placeholder="Enter your category name"/>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-10 hover-elevate-up">
                                <label for="categoryDescription" class="required form-label">Category Description</label>
                                <input type="text" class="form-control form-control-solid" id="categoryDescription" wire:model="description" placeholder="Enter your category description"/>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-10 hover-elevate-up">
                                <label for="categoryType" class="required form-label">Category Type</label>
                                <select class="form-select form-select-solid" id="categoryType" wire:model="type">
                                    <option value="">Choose a fitting Category</option>
                                    <option value="health">Health</option>
                                    <option value="finance">Finance</option>
                                    <option value="business">Business</option>
                                </select>
                                @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" wire:click.prevent="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
