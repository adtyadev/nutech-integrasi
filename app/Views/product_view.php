<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
    #text-white {
        color: white;
    }
    </style>
</head>

<body>
    <br>
    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="row justify-content-end">
                    <div class="col-md-8  text-center ">
                        <h5 class="card-title">Stock Management</h5>
                    </div>
                    <div class="col-6 col-md-4 text-right text-center ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertModal">
                            <ion-icon name="add-circle"></ion-icon>
                            Insert data
                        </button>
                    </div>
                </div>


            </div>
            </button>

            <!-- Modal Insert-->
            <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-white" id="insertModalLabel">Insert Data Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-insert">
                            <form>
                                <div class="form-group">
                                    <label for="namaBarang">Nama Barang</label>
                                    <input required type="text" class="form-control" id="namaBarangI" name="nama_barang"
                                        aria-describedby="namaBarang">
                                    <small id="nama-barang-notif-insert" style="display: none; color:red"
                                        class="form-text">Field Nama Barang is Required</small>
                                </div>
                                <div class="row row-cols-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="hargaBeli">Harga Beli</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="number" class="form-control" id="hargaBeliI"
                                                    name="harga_beli">
                                            </div>
                                            <small id="harga-beli-notif-insert" style="display: none; color:red"
                                                class="form-text">Field Harga Beli is Required</small>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Harga Jual</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input required type="number" class="form-control" id="hargaJualI"
                                                    name="harga_jual">
                                            </div>
                                            <small id="harga-jual-notif-insert" style="display: none; color:red"
                                                class="form-text">Field Harga Jual is required</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="stockProduct">Stock Product</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">

                                                    <span class="input-group-text">Qty</span>
                                                </div>
                                                <input required type="number" max="999" class="form-control" id="stockProductI"
                                                    name="stock_product">
                                            </div>
                                            <small id="stock-product-notif-insert" style="display: none; color:red"
                                                class="form-text">Field Stock Product is required</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambarProduk">Gambar Produk</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="gambarProdukFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input required type="file" class="custom-file-input" id="gambarProdukI"
                                                aria-describedby="gambarProdukFileAddon01" name="src_image">
                                            <label class="custom-file-label" for="gambarProduk">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <small id="gambar-produk-notif-insert" style="display: none; color:red"
                                    class="form-text">Required</small>
                                <small id="fileMax" class="form-text text-muted">File must be maximum 100Kb</small>
                                <small id="allowedType" class="form-text text-muted">Allowed file type : JPG and
                                    PNG</small>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="closeModalInsert"
                                data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveModalInsert">Save changes</button>
                            <button style="display: none;" type="button" class="btn btn-success btn-block"
                                id="successModalInsert">Data Saved</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal Insert-->


            <!-- Modal View-->
            <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title text-white" id="viewModalLabel">View Data Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-view">
                            <div class="row row-cols-2">
                                <div class="col-3">
                                    <img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                        style="
          max-width : 100%;
          max-height : 100%;
          display : block;
          "></img>
                                </div>

                                <div class="col-9">
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Nama Barang</th>
                                                <td class="namaBarangV">Aditya Kharisma W</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">Harga Beli</th>
                                                <td class="hargaBeliV">Rp 20.000.000,-</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">Harga Jual</th>
                                                <td class="hargaJualV">Rp 20.000.000,-</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Stock Product (Qty)</th>
                                                <td class="stockProductV">100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal View-->


        <!-- Modal Edit-->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="editModalLabel">Edit Data Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body edit-modal">
                        <div class="row row-cols-2">
                            <div class="col-3">
                                <img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    style="
          max-width : 100%;
          max-height : 100%;
          display : block;
          "></img>
                            </div>
                            <div class="col-9">
                                <form>
                                    <div class="form-group">
                                        <label for="namaBarang">Nama Barang</label>
                                        <input required type="email" class="form-control" id="namaBarangE"
                                            aria-describedby="namaBarang">
                                        <small id="nama-barang-notif-edit" style="display: none; color:red"
                                            class="form-text">Field Nama Barang is Required</small>
                                        <p id="idProductE" style="display:none"> </p>
                                    </div>
                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="hargaJual">Harga Jual</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input required type="number" class="form-control" id="hargaJualE">
                                                </div>
                                                <small id="harga-jual-notif-edit" style="display: none; color:red"
                                                    class="form-text">Field Harga Jual is Required</small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="hargaBeli">Harga Beli</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input required type="number" class="form-control" id="hargaBeliE">
                                                </div>
                                                <small id="harga-beli-notif-edit" style="display: none; color:red"
                                                    class="form-text">Field Harga Beli is Required</small>
                                            </div>
                                        </div>
                                    </div>

                            </div>

                        </div>
                        <div class="row row-cols-2">
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="stockProduct">Stock</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">

                                            <span class="input-group-text">Qty</span>
                                        </div>
                                        <input required type="number" max="999" class="form-control" id="stockProductE">
                                    </div>
                                    <small id="stock-product-notif-edit" style="display: none; color:red"
                                        class="form-text">Field Stock Product is Required</small>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="gambarProduct">Gambar Product</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">

                                            <span class="input-group-text" id="gambarProductFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input required type="file" class="custom-file-input" id="gambarProductE"
                                                name="gambarProductE" aria-describedby="gambarProduct">
                                            <label class="custom-file-label" for="gambarProduct">Choose file</label>
                                        </div>
                                    </div>
                                    <small id="fileMax" class="form-text text-muted">File must be maximum
                                        100Kb</small>
                                    <small id="allowedType" class="form-text text-muted">Allowed file type : JPG and
                                        PNG</small>
                                    <small id="gambar-product-notif-edit" style="display: none; color:red"
                                        class="form-text">Field Gambar Product is Required</small>
                                </div>
                            </div>
                        </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="closeModalEdit">Close</button>
                        <button type="button" class="btn btn-warning" id="updateModalEdit">Update</button>
                        <button style="display: none;" type="button" class="btn btn-success btn-block"
                            id="successModalEdit">Data Update</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal Edit-->

        <!-- Modal Confirmation Delete -->
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title" id="deleteModalLabel" style="color: white;">Confirmation Delete Produk
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center modal-delete">
                        <h6> Do you realy want to delete <br><span id="dataDelete">Aditya Kharisma - (ADT-123) <span> ?
                                    <br>
                                    This process cannot be undone </h6>
                        <p id="idDeleteData" style="display:none"> </p>
                        <div class="row">
                            <button style="display: none;" type="button" class="btn btn-danger btn-block"
                                id="successModalDelete">Data Deleted</button>
                            <div class="col-6">
                                <button type="button" class="btn btn-secondary btn-block" id="cancelModalDelete"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-danger btn-block"
                                    id="deleteModalDelete">Delete</button>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal Confirmation Delete -->

        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th> Harga Beli</th>
                        <th> Harga Jual</th>
                        <th>Stock Product (Qty)</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($product as $row):?>
                    <tr>
                        <td><?= $row['nama_barang'];?></td>
                        <td>Rp <?= $row['harga_beli'];?></td>
                        <td>Rp <?= $row['harga_jual'];?></td>
                        <td><?= $row['stock_product'];?></td>
                        <td>
                            <img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                            style="
          max-width : 50px;
          max-height : 50px;
          display : block;
          "></img>
                        </td>
                        <td class="text-center">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-info active btn-sm">
                                    <input type="radio" name="options" class="viewData"
                                        data-product="<?= $row['id_product'];?>" data-toggle="modal"
                                        data-target="#viewModal">
                                    <ion-icon name="eye"></ion-icon>
                                </label>
                                <label class="btn btn-warning btn-sm">
                                    <input type="radio" name="options" class="editData"
                                        data-product="<?= $row['id_product'];?>" data-toggle="modal"
                                        data-target="#editModal">
                                    <ion-icon name="pencil"></ion-icon>
                                </label>
                                <label class="btn btn-danger btn-sm">
                                    <input type="radio" name="options" class="deleteData"
                                        data-product="<?= $row['id_product'];?>" data-toggle="modal"
                                        data-target="#deleteModal">
                                    <ion-icon name="trash"></ion-icon>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Barang</th>
                        <th> Harga Beli</th>
                        <th> Harga Jual</th>
                        <th>Stock Product</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <div class="card-footer text-muted text-center">
            Nutech Integrasi - Web Developer - Aditya Kharisma
        </div>
    </div>


    <br>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            "scrollX": true
        });
        $('.modal-header .bg-primary').addClass("bg-success");
        $('#saveModalInsert').click(function() {
            console.log("he")
            var nama_barang = $(".modal-insert #namaBarangI").val();
            if (nama_barang === "") {
                $("#nama-barang-notif-insert").css("display", "");
                return false;
            } else $("#nama-barang-notif-insert").css("display", "none");

            var harga_beli = $(".modal-insert #hargaBeliI").val();
            if (harga_beli === "") {
                $("#harga-beli-notif-insert").css("display", "");
                return false;
            } else $("#harga-beli-notif-insert").css("display", "none");

            var harga_jual = $(".modal-insert #hargaJualI").val();
            if (harga_jual === "") {
                $("#harga-jual-notif-insert").css("display", "");
                return false;
            } else $("#harga-jual-notif-insert").css("display", "none");

            var stock_product = $(".modal-insert #stockProductI").val();
            if (stock_product === "") {
                $("#stock-product-notif-insert").css("display", "");
                return false;
            } else $("#gambar-product-notif-insert").css("display", "none");
            // var src_image = $(".modal-insert #gambarProduct").val();

        //     var src_image = new FormData();
        // var files = $('#gambarProdukI')[0].files[0];
        // src_image.append('file',files);
            var src_image = "/asd/asd/as/d";
            $.ajax({
                url: '<?=base_url()?>/product/save',
                type: 'POST',
                // dataType: 'JSON', //is you telling jQuery what kind of response to expect.
                data: {
                    nama_barang: nama_barang,
                    harga_beli: harga_beli,
                    harga_jual: harga_jual,
                    stock_product: stock_product,
                    src_image: src_image,
                },
                success: function(response) {
                    $("#saveModalInsert").css("display", "none");
                    $("#closeModalInsert").css("display", "none");
                    $("#successModalInsert").css("display", "");
                    $('.modal-header').addClass("bg-success");
                    setTimeout(function() {
                        location.reload();
                    }, 500);

                    // alert("SUKSES")
                },
                error: function(response) {
                    alert(response);

                }

            });
        });


        $('.viewData').click(function() {
            id_product = $(this).attr("data-product");
            console.log(id_product)
            $.ajax({
                url: '<?=base_url()?>/product/viewproduct/' + id_product,
                type: 'GET',
                // dataType: 'JSON', //is you telling jQuery what kind of response to expect.
                data: {},
                success: function(response) {
                    $(".namaBarangV").text(response.messages[0]['nama_barang']);
                    $(".hargaJualV").text(response.messages[0]['harga_jual']);
                    $(".hargaBeliV").text(response.messages[0]['harga_beli']);
                    $(".stockProductV").text(response.messages[0]['stock_product']);

                    console.log()
                    // setTimeout(function() {
                    //     location.reload();
                    // }, 500);

                    // alert("SUKSES")
                },
                error: function(response) {
                    alert(response);

                }

            });
        });

        $('.editData').click(function() {
            console.log($(".stockProduct").val())
            id_product = $(this).attr("data-product");
            console.log(id_product)
            $.ajax({
                url: '<?=base_url()?>/product/viewproduct/' + id_product,
                type: 'GET',
                // dataType: 'JSON', //is you telling jQuery what kind of response to expect.
                data: {},
                success: function(response) {
                    $("#idProductE").text(response.messages[0]['id_product']);
                    $("#namaBarangE").val(response.messages[0]['nama_barang']);
                    $("#hargaJualE").val(response.messages[0]['harga_jual']);
                    $("#hargaBeliE").val(response.messages[0]['harga_beli']);
                    $("#stockProductE").val(response.messages[0]['stock_product']);
                },
                error: function(response) {
                    alert(response);

                }

            });
        });

        $('#updateModalEdit').click(function() {
            var id_product = $("#idProductE").text();
            var nama_barang = $("#namaBarangE").val();
            if (nama_barang === "") {
                $("#nama-barang-notif-edit").css("display", "");
                return false;
            } else $("#nama-barang-notif-edit").css("display", "none");

            var harga_jual = $("#hargaJualE").val();
            if (harga_jual === "") {
                $("#harga-jual-notif-edit").css("display", "");
                return false;
            } else $("#harga-jual-notif-edit").css("display", "none");

            var harga_beli = $("#hargaBeliE").val();
            if (harga_beli === "") {
                $("#harga-beli-notif-edit").css("display", "");
                return false;
            } else $("#harga-beli-notif-edit").css("display", "none");

            var stock_product = $("#stockProductE").val();
            if (stock_product === "") {
                $("#stock-product-notif-edit").css("display", "");
                return false;
            } else $("#stock-product-notif-edit").css("display", "none");

            var src_image = "/asd/asd/as/d";
            $.ajax({
                url: '<?=base_url()?>/product/update/' + id_product,
                type: 'POST',
                // dataType: 'JSON', //is you telling jQuery what kind of response to expect.
                data: {
                    id_product: id_product,
                    nama_barang: nama_barang,
                    harga_beli: harga_beli,
                    harga_jual: harga_jual,
                    stock_product: stock_product,
                    src_image: src_image,
                },
                success: function(response) {
                    $("#updateModalEdit").css("display", "none");
                    $("#closeModalEdit").css("display", "none");
                    $("#successModalEdit").css("display", "");
                    $('.modal-header').removeClass('bg-warning').addClass("bg-success");
                    setTimeout(function() {
                        location.reload();
                    }, 500);

                    // alert("SUKSES")
                },
                error: function(response) {
                    alert(response);

                }

            });

        });

        $('.deleteData').click(function() {
            id_product = $(this).attr("data-product");
            console.log(id_product)
            $.ajax({
                url: '<?=base_url()?>/product/viewproduct/' + id_product,
                type: 'GET',
                // dataType: 'JSON', //is you telling jQuery what kind of response to expect.
                data: {},
                success: function(response) {
                    $("#dataDelete").text(response.messages[0]['nama_barang']);
                    $('#idDeleteData').text(response.messages[0]['id_product']);
                    console.log()
                    // setTimeout(function() {
                    //     location.reload();
                    // }, 500);

                    // alert("SUKSES")
                },
                error: function(response) {
                    alert(response);

                }

            });
        });

        $('#deleteModalDelete').click(function() {
            let id_product = $('#idDeleteData').text();
            console.log(id_product)
            $.ajax({
                url: '<?=base_url()?>/product/delete/' + id_product,
                type: 'GET',
                // dataType: 'JSON', //is you telling jQuery what kind of response to expect.
                data: {},
                success: function(response) {
                    $("#deleteModalDelete").css("display", "none");
                    $("#cancelModalDelete").css("display", "none");
                    $("#successModalDelete").css("display", "");
                    setTimeout(function() {
                        location.reload();
                    }, 500);
                    // alert("SUKSES")
                },
                error: function(response) {
                    alert(response);
                }
            });
        });

    });
    </script>
</body>

</html>