document.addEventListener("click", function (e) {
    
    addMap = e.target.closest(".add-map");
    if (addMap) {
        item = document.createElement("div");
        item.setAttribute("class", "col-lg-6 map-item");
        item.innerHTML = `
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn-close delete-map" aria-label="Close"></button>
                <span class="text-danger float-right">*กำหนด width="100%"</span>
                <div class="form-group mt-2"><input name="name" type="text" class="form-control"></div>
                <div class="form-group"><textarea name="address" id="address" rows="4" class="form-control"></textarea></div>
                <div class="form-group"><textarea name="map" class="form-control" rows="4"></textarea></div>
                <div class="map-preview border rounded-3" style="">Preview</div>
                <div class="actions editing mt-3 float-right">
                    <button class="btn btn-secondary rounded-pill -edit btn-sm" aria-label="Edit"><i class="fas fa-pen"></i> Edit</button>
                    <button class="btn btn-warning rounded-pill -save btn-sm" aria-label="Save"><i class="fas fa-save"></i> Save</button>
                    <button class="btn btn-danger rounded-pill -cancel btn-sm" aria-label="Cancel"><i class="fas fa-undo"></i> Cancel</button>
                </div>
            </div>
        </div>
        `;
        document.querySelector(".maps-section > .row").appendChild(item);
    }

    const cancelContact = e.target.closest(".cancel-contact");
    if (cancelContact) {
        const card = cancelContact.closest(".card-body");
        card.querySelector('input[name="telephone"]').value = card.querySelector('input[name="telephone"]').getAttribute("old");
        card.querySelector('input[name="mobile"]').value = card.querySelector('input[name="mobile"]').getAttribute("old");
        card.querySelector('input[name="email"]').value = card.querySelector('input[name="email"]').getAttribute("old");
        card.querySelector('input[name="twitter"]').value = card.querySelector('input[name="twitter"]').getAttribute("old");
        card.querySelector('input[name="fb"]').value = card.querySelector('input[name="fb"]').getAttribute("old");
        card.querySelector('input[name="ig"]').value = card.querySelector('input[name="ig"]').getAttribute("old");
        card.querySelector('input[name="yt"]').value = card.querySelector('input[name="yt"]').getAttribute("old");
        card.querySelector(".actions-contact").classList.remove("editing");

        card.querySelector('input[name="telephone"]').setAttribute("readonly", true);
        card.querySelector('input[name="mobile"]').setAttribute("readonly", true);
        card.querySelector('input[name="email"]').setAttribute("readonly", true);
        card.querySelector('input[name="twitter"]').setAttribute("readonly", true);
        card.querySelector('input[name="fb"]').setAttribute("readonly", true);
        card.querySelector('input[name="ig"]').setAttribute("readonly", true);
        card.querySelector('input[name="yt"]').setAttribute("readonly", true);

    }

    const saveContact = e.target.closest(".save-contact");
    if (saveContact) {
        let contactData = {};
        const card = saveContact.closest(".card-body");
        contactData._token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        contactData._method = "POST";
        contactData.telephone = card.querySelector('input[name="telephone"]').value;
        contactData.mobile = card.querySelector('input[name="mobile"]').value;
        contactData.email = card.querySelector('input[name="email"]').value;
        contactData.twitter = card.querySelector('input[name="twitter"]').value;
        contactData.fb = card.querySelector('input[name="fb"]').value;
        contactData.ig = card.querySelector('input[name="ig"]').value;
        contactData.yt = card.querySelector('input[name="yt"]').value;

        SaveContact(contactData).then((res) => {
            if (res) {
                Swal.fire({
                    icon: res.status == true ? "success" : "error",
                    title: res.message,
                    toast: true,
                    timer: 2000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                });
                if (res.status === true) {
                    card.querySelector('input[name="telephone"]').setAttribute("readonly", true);
                    card.querySelector('input[name="mobile"]').setAttribute("readonly", true);
                    card.querySelector('input[name="email"]').setAttribute("readonly", true);
                    card.querySelector('input[name="twitter"]').setAttribute("readonly", true);
                    card.querySelector('input[name="fb"]').setAttribute("readonly", true);
                    card.querySelector('input[name="ig"]').setAttribute("readonly", true);
                    card.querySelector('input[name="yt"]').setAttribute("readonly", true);

                    saveContact.closest(".actions-contact").classList.remove("editing");
                }
            }
        });
    }

    const deleteMap = e.target.closest(".delete-map");
    if (deleteMap) {
        if (confirm("Confirm to delete?") === true) {
            let id = deleteMap
                .closest(".card-body")
                .querySelector('input[name="id"]')?.value;
            if (id) {
                DeleteMap(id).then((res) => {
                    Swal.fire({
                        icon: res.status === true ? "success" : "error",
                        title: res.message,
                        toast: true,
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    });
                    deleteMap.closest(".map-item").remove();
                });
            } else {
                deleteMap.closest(".map-item").remove();
            }
        }
    }

    const editMap = e.target.closest(".-edit");
    if (editMap) {
        editMap.closest(".card-body").querySelector('input[name="name"]').removeAttribute("readonly");
        editMap.closest(".card-body").querySelector('textarea[name="address"]').removeAttribute("readonly");
        editMap.closest(".card-body").querySelector('textarea[name="map"]').removeAttribute("readonly");
        editMap.closest(".actions").classList.add("editing");
    }

    const editContact = e.target.closest(".edit-contact");
    if (editContact) {
        const card = editContact.closest(".card-body");
        editContact.closest(".actions-contact").classList.add("editing");
        card.querySelector('input[name="telephone"]').removeAttribute("readonly");
        card.querySelector('input[name="mobile"]').removeAttribute("readonly");
        card.querySelector('input[name="email"]').removeAttribute("readonly");
        card.querySelector('input[name="twitter"]').removeAttribute("readonly");
        card.querySelector('input[name="fb"]').removeAttribute("readonly");
        card.querySelector('input[name="ig"]').removeAttribute("readonly");
        card.querySelector('input[name="yt"]').removeAttribute("readonly");
    }

    const cancelEdit = e.target.closest(".-cancel");
    if (cancelEdit) {
        CancelEdit(cancelEdit);
    }

    const save = e.target.closest(".-save");
    if (save) {
        addressName = save.closest(".card-body").querySelector('input[name="name"]');
        address = save.closest(".card-body").querySelector('textarea[name="address"]');
        map = save.closest(".card-body").querySelector('textarea[name="map"]');
        id = save.closest(".card-body").querySelector('input[name="id"]')?.value;
        if (addressName.value == "" || address.value == "" || map.value == "") {
            if (addressName.value == "") {
                addressName.classList.add("is-invalid");
            }
            if (address.value == "") {
                address.classList.add("is-invalid");
            }
            if (map.value == "") {
                map.classList.add("is-invalid");
            }
        } else {
            addressName.classList.remove("is-invalid");
            address.classList.remove("is-invalid");
            map.classList.remove("is-invalid");
            response = Save(id, addressName.value, address.value, map.value);
            response.then((res) => {
                if (res.status === true) {
                    Swal.fire({
                        icon: res.status === true ? "success" : "error",
                        title: res.message,
                        toast: true,
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    });
                    let resId = document.createElement("input");
                    resId.setAttribute("type", "hidden");
                    resId.setAttribute("name", "id");
                    resId.setAttribute("value", res.id);
                    save.closest(".card-body").appendChild(resId);
                    save.closest(".card-body").querySelector('input[name="name"]').setAttribute("readonly", true);
                    save.closest(".card-body").querySelector('textarea[name="address"]').setAttribute("readonly", true);
                    save.closest(".card-body").querySelector('textarea[name="map"]').setAttribute("readonly", true);
                    save.closest(".actions").classList.remove("editing");
                }
            });
        }
    }

    function CancelEdit(e) {
        card = e.closest(".card-body");
        id = card.querySelector('[name="id"]');
        adddressName = card.querySelector('input[name="name"]');
        address = card.querySelector('textarea[name="address"]');
        map = card.querySelector('textarea[name="map"]');
        if (id?.value) {
            card.querySelector('input[name="name"]').value = adddressName.getAttribute("old");
            card.querySelector('textarea[name="address"]').value = address.getAttribute("old");
            card.querySelector('textarea[name="map"]').value = map.getAttribute("old");
            card.querySelector(".map-preview").innerHTML = map.getAttribute("old") ? map.getAttribute("old") : "Preview";

            card.querySelector('input[name="name"]').setAttribute("readonly", true);
            card.querySelector('textarea[name="address"]').setAttribute("readonly", true);
            card.querySelector('textarea[name="map"]').setAttribute("readonly", true);
            card.querySelector(".actions").classList.remove("editing");
        }
    }

    async function Save(id, name, address, map) {
        let data = {};
        if (id != null) {
            url = `webpanel/map/${id}`;
            data.name = name;
            data.address = address;
            data.map = map;
        } else {
            url = `webpanel/map/add`;
            data._method = "PUT";
            data.name = name;
            data.address = address;
            data.map = map;
        }
        data._token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        try {
            const request = await fetch(url, {
                method: "post",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            });
            const response = await request.json();
            return response;
        } catch (error) {
            console.log("Error:", error);
        }
    }

    async function DeleteMap(id) {
        try {
            const request = await fetch(`webpanel/map/${id}`, {
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

    async function SaveContact(data) {
        try {
            const request = await fetch("webpanel/contact/update", {
                method: "post",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            });
            const response = await request.json();
            return response;
        } catch (error) {
            console.log("Error:", error);
        }
    }
});

document.addEventListener("keyup", function (e) {
    map = e.target.closest('textarea[name="map"]');
    if (map) {
        val = map.value;
        map.closest(".card-body").querySelector(".map-preview").innerHTML = val;
    }
});
