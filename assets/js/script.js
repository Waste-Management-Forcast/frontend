$(document).ready(function() {

    $(document).on('change', '#klasifikasi-sampah', function(e) {
        e.preventDefault();

        let klasifikasi = $(this).find(":selected").text();

        if (klasifikasi == 'Organik') {
            $('#nama-kategori').html(`
            <option value="" disabled selected>Nama Kategori</option>
            <option value="Basah">Basah</option>
            <option value="Kering">Kering</option>
            `);
        } else if (klasifikasi == 'Anorganik') {
            $('#nama-kategori').html(`
            <option value="" disabled selected>Nama Kategori</option>
            <option value="Kaca">Kaca</option>
            <option value="Plastik">Plastik</option>
            <option value="Kain">Kain</option>
            <option value="Logam">Logam</option>
            `);
        } else {
            $('#nama-kategori').html(`
            <option value="" disabled selected>Nama Kategori</option>
            <option value="Barang Elektronik">Barang Elektronik</option>
            <option value="Jenis Sampah Cat">Jenis Sampah Cat</option>
            <option value="Baterai">Baterai</option>
            <option value="Lampu">Lampu</option>
            <option value="Sampah Medis">Sampah Medis</option>
            <option value="Lainnya">Lainnya</option>
            `)
        }
    });


    $(document).on('click', '#tambah-kategori', function(e) {
        e.preventDefault();
        let id = Date.now()
        $('#area-tambah-kategori').append(`
        <div class="card" id="${id}">
            <div class="card-body">
                <i class="fa fa-trash text-danger ms-auto" style="cursor: pointer;" id="hapus-kategori" data-id="${id}"></i>
                <div class="input-group mb-3 mt-3">
                    <select class="form-select" required name="klasifikasi-sampah" id="klasifikasi-sampah">
                        <option value="" disabled selected>Klasifikasi Sampah</option>
                        <option value="Organik">Organik</option>
                        <option value="Anorganik">Anorganik</option>
                        <option value="B3">B3</option>
                    </select>
                    <div class="valid-feedback">
                        Yeay! Great
                    </div>
                    <div class="invalid-feedback">
                        Oh No! Required to Fill
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" required id="nama-kategori" name="nama-kategori">
                        <option value="" disabled selected>Pilih Klasifikasi Terlebih Dahulu</option>
                    </select>
                    <div class="valid-feedback">
                        Yeay! Great
                    </div>
                    <div class="invalid-feedback">
                        Oh No! Required to Fill
                    </div>
                </div>
                <div class="form-floating mb-4">
                    <input type="number" class="form-control form-floating-sm user-input" min="1" id="berat" required placeholder="berat">
                    <label class="title-column" for="berat">Berat Sampah Kategori</label>
                    <small class="text-primary fw-bold">Dalam Satuan Kg</small>
                    <div class="valid-feedback">
                        Good Job!
                    </div>
                    <div class="invalid-feedback">
                        Oh No! Required to Fill
                    </div>
                </div>
            </div>
        </div>
        `)
    });

    $(document).on('input', '#berat', function() {
        let coins = document.querySelectorAll('#berat');
        coins.forEach(function(userItem) {
            console.log(userItem);
        });
    })

    $(document).on('click', '#hapus-kategori', function(e) {
        e.preventDefault();
        let id = $(this).attr('data-id');
        $(`#${id}`).remove();
    });

});

// Drag And Drop Upload
function readFile(input) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = function(e) {
            let htmlPreview =
                '<img width="200" src="' + e.target.result + '" />' +
                '<p>' + input.files[0].name + '</p>';
            let wrapperZone = $(input).parent();
            let previewZone = $(input).parent().parent().find('.preview-zone');
            let boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

            wrapperZone.removeClass('dragover');
            previewZone.removeClass('hidden');
            boxZone.empty();
            boxZone.append(htmlPreview);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function reset(e) {
    e.wrap('<form>').closest('form').get(0).reset();
    e.unwrap();
}

$(".dropzone").change(function() {
    readFile(this);
});

$('.dropzone-wrapper').on('dragover', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('dragover');
});

$('.dropzone-wrapper').on('dragleave', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('dragover');
});

$('.remove-preview').on('click', function() {
    var boxZone = $(this).parents('.preview-zone').find('.box-body');
    var previewZone = $(this).parents('.preview-zone');
    var dropzone = $(this).parents('.form-group').find('.dropzone');
    boxZone.empty();
    previewZone.addClass('hidden');
    reset(dropzone);
});