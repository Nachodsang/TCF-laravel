document.addEventListener("click", function (e) {
    const addClient = e.target.closest(".add-client");
    if (addClient) {
        let item = document.createElement("div");
        item.setAttribute("class", "col-lg-4 client-item mb-3");
        item.innerHTML = `
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn-close delete-client" aria-label="Close"></button>
                <div class="row mt-2">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="img-thumbnail mb-2" style="min-height: 200px; display:flex; align-items:center; justify-content:center;">
                                <span id="previewTitle">Preview</span>
                                <img class="img-fluid rounded" id="imgPreview" name="imgPreview" src="" style="height: 100%; object-fit: contain;">
                            </div>
                            <input class="form-control" accept="image/*" type="file" id="image" name="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="alt">Image Alt :</label>
                            <input class="form-control" type="text" name="alt" id="alt">
                        </div>
                        <div class="form-group">
                            <label for="title">Image Title :</label>
                            <input class="form-control" type="text" name="title" id="title">
                        </div>
                        <div class="actions editing float-right">
                            <button class="btn btn-info rounded-pill edit btn-sm"><i class="fas fa-pen"></i> Edit</button>
                            <button class="btn btn-warning rounded-pill save btn-sm"><i class="fas fa-save"></i> Save</button>
                            <button class="btn btn-danger rounded-pill cancel btn-sm"><i class="fas fa-undo"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
        document.querySelector(".client-section > .row").appendChild(item);
    }

    const save = e.target.closest(".save");
    if (save) {
        const img = save.closest(".card-body").querySelector('input[name="image"]');
        const imgalt = save.closest(".card-body").querySelector('input[name="alt"]');
        const imgtitle = save.closest(".card-body").querySelector('input[name="title"]');
        const id = save.closest(".card-body").querySelector('input[name="id"]')?.value;

        const data = new FormData();
        data.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute("content"))

        if (id != null) {
            if (imgalt.value == "" || imgtitle.value == "") {
                if (imgalt.value == "") {
                    imgalt.classList.add("is-invalid");
                }
                if (imgtitle.value == "") {
                    imgtitle.classList.add("is-invalid");
                }
            } else {
                imgalt.classList.remove("is-invalid");
                imgtitle.classList.remove("is-invalid");

                if (img.value) {
                    data.append('img', img.files[0]);
                }
                data.append('imgalt', imgalt.value);
                data.append('imgtitle', imgtitle.value);
                data.append('_method', 'PUT');
                url = `webpanel/about-us/client/update/${id}`;
            }
        } else {
            if (img.value == "" || imgalt.value == "" || imgtitle.value == "") {
                if (img.value == "") {
                    img.classList.add("is-invalid");
                }
                if (imgalt.value == "") {
                    imgalt.classList.add("is-invalid");
                }
                if (imgtitle.value == "") {
                    imgtitle.classList.add("is-invalid");
                }
            } else {
                img.classList.remove("is-invalid");
                imgalt.classList.remove("is-invalid");
                imgtitle.classList.remove("is-invalid");

                data.append('img', img.files[0]);
                data.append('imgalt', imgalt.value);
                data.append('imgtitle', imgtitle.value);
                url = `webpanel/about-us/client/store`;
            }
        }

        const response = StoreClient(data, url);
        response.then((res) => {
            Swal.fire({
                icon: res.status === true ? "success" : "error",
                title: res.message,
                toast: true,
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false,
            });
            if (res.status === true) {
                let resId = document.createElement("input");
                resId.setAttribute("type", "hidden");
                resId.setAttribute("name", "id");
                resId.setAttribute("value", res.id);
                save.closest(".card-body").appendChild(resId);
                img.setAttribute("disabled", true);
                imgalt.setAttribute("readonly", true);
                imgtitle.setAttribute("readonly", true);
                save.closest(".actions").classList.remove("editing");
            }
        });
    }

    const deleteClient = e.target.closest(".delete-client");
    if (deleteClient) {
        Swal.fire({
            title: "Do you want to Delete ?",
            showCancelButton: true,
            confirmButtonText: "Save",
        }).then((result) => {
            if (result.isConfirmed) {
                let id = deleteClient.closest(".card-body").querySelector('input[name="id"]')?.value;
            if (id) {
                DeleteClient(id).then((res) => {
                    Swal.fire({
                        icon: res.status === true ? "success" : "error",
                        title: res.message,
                        toast: true,
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    });
                    deleteClient.closest(".client-item").remove();
                });
            } else {
                deleteClient.closest(".client-item").remove();
            }
            }
        });
    }

    const editClient = e.target.closest(".edit");
    if (editClient) {
        editClient.closest(".card-body").querySelector('input[name="image"]').removeAttribute("disabled");
        editClient.closest(".card-body").querySelector('input[name="alt"]').removeAttribute("readonly");
        editClient.closest(".card-body").querySelector('input[name="title"]').removeAttribute("readonly");
        editClient.closest(".actions").classList.add("editing");
    }

    const cancelEdit = e.target.closest(".cancel");
    if (cancelEdit) {
        CancelEdit(cancelEdit);
    }

    async function StoreClient(data, url) {
        try {
            const request = await fetch(url, {
                method: "post",
                body: data,
            });
            const response = await request.json();
            return response;
        } catch (error) {
            console.log("Error:", error);
        }
    }

    async function DeleteClient(id) {
        try {
            const request = await fetch(`webpanel/about-us/client/delete/${id}`, {
                method: "post",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    _token: document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                    _method: "DELETE",
                    id: id,
                }),
            });
            const response = await request.json();
            return response;
        } catch (error) {
            console.log("Error:", error);
        }
    }

    function CancelEdit(e) {
        const card = e.closest(".card-body");
        const id = card.querySelector('[name="id"]');
        const imgPreview = card.querySelector('[name="imgPreview"]');
        const img = card.querySelector('input[name="image"]');
        const imgalt = card.querySelector('input[name="alt"]');
        const imgtitle = card.querySelector('input[name="title"]');
        if (id?.value) {
            imgPreview.src = imgPreview.getAttribute("old");
            imgalt.value = imgalt.getAttribute("old");
            imgtitle.value = imgtitle.getAttribute("old");

            img.setAttribute("disabled", true);
            imgalt.setAttribute("readonly", true);
            imgtitle.setAttribute("readonly", true);
            card.querySelector(".actions").classList.remove("editing");
        }
    }
});

document.addEventListener("change", function(e){
    const input = e.target.closest("#image");
    if (input) {
        const card = input.closest(".card-body");
        const imgPreview = card.querySelector("#imgPreview");
        const previewTitle = card.querySelector("#previewTitle");
        const [file] = input.files;
        if (file) {
            imgPreview.src = URL.createObjectURL(file);
            previewTitle.style.display = "none";
        }
    }
});