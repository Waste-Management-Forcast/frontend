<?php
$url = "http://116.193.190.156/waste-api/admin";
$obj = json_decode(file_get_contents($url), true);
?>
<script>
    $(document).ready(function() {

        let value = 1
        $(document).on('click', '#tambah-kategori', function(e) {
            e.preventDefault();
            let id = value++

            $('#area-tambah-kategori').append(`
                <div class="card" id="${id}">
                    <div class="card-body">
                        <i class="fa fa-trash text-danger ms-auto" style="cursor: pointer;" id="hapus-kategori" data-id="${id}"></i>
                        <div class="input-group mb-3 mt-3">
                            <select class="form-select" required name="id_kategori" id="klasifikasi-sampah" data-id="${id}">
                                <option value="" disabled selected>Klasifikasi Sampah</option>
                                <?php
                                $url = "http://116.193.190.156/waste-api/kategori";
                                $obj = json_decode(file_get_contents($url), true);
                                foreach ($obj["data"] as $arr) { ?>
                                        <option value="<?= $arr['id_kategori_sampah']; ?>"><?= $arr['name_kategori']; ?></option>
                                    <?php } ?>
                            </select>
                            <div class="valid-feedback">
                                Yeay! Great
                            </div>
                            <div class="invalid-feedback">
                                Oh No! Required to Fill
                            </div>
                        </div>
                        
                        <div class="form-floating mb-4">
                            <input type="number" name="berat_kategori" class="form-control form-floating-sm user-input berat" min="1" id="${id}" data-id="${id}" required placeholder="berat">
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
                `);

        });

        $(document).on('change', '.berat', function() {
            let id = $(this).attr('data-id');
            let value = $(this).val();

            let n = $("input[name^='berat_kategori']").length;
            let array = $("input[name^='berat_kategori']");
            let total = 0;
            for (i = 0; i < n; i++) {
                let berat = array.eq(i).val();
                total += parseInt(berat)
                $('#berat-total').html(total);
                $('#value-berat-total-add').removeAttr('value');
                $('#value-berat-total-add').attr('value', parseInt(total));
                document.getElementById('berat_total').value = total;
            }

        })

        $(document).on('click', '#buttoneditsampah', function(e) {
            e.preventDefault();
            let idCard = $(this).attr('data-id');
            $(document).on('change', '.berat-edit' + idCard, function() {
                let id = $(this).attr('data-id');
                let value = $(this).val();

                let n = $(`input[data-name^='berat_kategori_edit${idCard}']`).length;
                let array = $(`input[data-name^='berat_kategori_edit${idCard}']`);
                let total = 0;
                for (i = 0; i < n; i++) {
                    let berat = array.eq(i).val();
                    total += parseInt(berat)
                    $('#berat-total-edit' + idCard).html(total);
                    $('#value-berat-total-edit' + idCard).removeAttr('value');
                    $('#value-berat-total-edit' + idCard).attr('value', parseInt(total));
                    // document.getElementById('berat_total').value = total;
                }
            })
        });


        $(document).on('change', '.berat', function(e) {
            e.preventDefault();
            $('.hidden-berat-kategori').html(' ');
            let n = $("input[name^='berat_kategori']").length;
            let array = $("input[name^='berat_kategori']");
            let array2 = $("select[name^='id_kategori']");
            $('.hidden-berat-kategori').html(' ');
            for (i = 0; i < n; i++) {
                $('.hidden-berat-kategori').append(`<input type="hidden" id="" name="value_berat_kategori_${i+1}" value="${array.eq(i).val()}">`);
                $('.hidden-berat-kategori').append(`<input type="hidden" id="" name="value_id_kategori_${i+1}" value="${array2.eq(i).val()}">`);
            }
        });

        $(document).on('click', '#hapus-kategori', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            $(`#${id}`).remove();
            var n = $("input[name^='berat_kategori']").length;
            var array = $("input[name^='berat_kategori']");
            let total = 0;
            if (n > 0) {
                for (i = 0; i < n; i++) {
                    let berat = array.eq(i).val();
                    total += parseInt(berat)
                    $('#berat-total').html(total);
                    $('#value-berat-total').removeAttr('value');
                    $('#value-berat-total').attr('value', parseInt(total));
                }
            } else {
                $('#berat-total').html('-');
            }
            // let berat_total = parseInt($('#berat-total').html());
            // console.log(value);
            // $('#berat-total').html(berat_total - parseInt(value));
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
</script>