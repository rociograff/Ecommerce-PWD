<?php
include_once '../estructuras/cabecera.php';
?>

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="row">

                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="#!" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continuar comprando</a></h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">Carrito de compras</p>
                                        <p class="mb-0">Tienes 4 productos en tu carrito</p>
                                    </div>
                                    <div>
                                        <p class="mb-0"><span class="text-muted">Ordenar por:</span> <a href="#!" class="text-body">precio <i class="fas fa-angle-down mt-1"></i></a></p>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center" style="width: 45%">
                                                <div>
                                                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-shopping-carts/img1.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Iphone 11 pro</h5>
                                                    <p class="small mb-0">256GB, Navy Blue</p>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex flex-row align-items-center" style="width: 15%">
                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1" type="number" style="width: 55px" class="form-control form-control-sm" disabled />

                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex flex-row align-items-center" style="width: 5%">
                                                <h5 class="mb-0">$1799</h5>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center" style="width: 45%">
                                                <div>
                                                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-shopping-carts/img2.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Samsung galaxy Note 10 </h5>
                                                    <p class="small mb-0">256GB, Navy Blue</p>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex flex-row align-items-center" style="width: 15%">
                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1" type="number" style="width: 55px" class="form-control form-control-sm" disabled />

                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex flex-row align-items-center" style="width: 5%">
                                                <h5 class="mb-0">$1799</h5>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center" style="width: 45%">
                                                <div>
                                                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-shopping-carts/img3.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Canon EOS M50</h5>
                                                    <p class="small mb-0">Onyx Black</p>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex flex-row align-items-center" style="width: 15%">
                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1" type="number" style="width: 55px" class="form-control form-control-sm" disabled />

                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex flex-row align-items-center" style="width: 5%">
                                                <h5 class="mb-0">$1799</h5>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center" style="width: 45%">
                                                <div>
                                                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-shopping-carts/img4.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>MacBook Pro</h5>
                                                    <p class="small mb-0">1TB, Graphite</p>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center" style="width: 15%">
                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1" type="number" style="width: 55px" class="form-control form-control-sm" disabled />

                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex flex-row align-items-center" style="width: 5%">
                                                <h5 class="mb-0">$1799</h5>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-5">

                                <div class="text-white rounded-3" style="background:rgba(139,0,142,1)">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Detalles de tarjeta</h5>
                                        </div>

                                        <p class="small mb-2">Tipo de tarjetas</p>
                                        <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                                        <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
                                        <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
                                        <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                                        <form class="mt-4">
                                            <div class="form-outline form-white mb-4">
                                                <input type="text" id="typeName" class="form-control form-control-lg" siez="17" placeholder="Cardholder's Name" />
                                                <label class="form-label" for="typeName">Nombre </label>
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <input type="text" id="typeText" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                                <label class="form-label" for="typeText">Número de tarjeta</label>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                                        <label class="form-label" for="typeExp">Vencimiento</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input type="password" id="typeText" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                                        <label class="form-label" for="typeText">Cvv</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-2">Total</p>
                                            <p class="mb-2">$4818.00</p>
                                        </div>

                                        <div class="mt-4">
                                            <div class="d-grid offset-md-4 col-md-3">
                                                <button class="btn" style="color: white;background: rgba(252, 51, 255)" type="submit">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Pagar <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- <button type="submit" class=" btn-lg" style="background:rgba(0,212,255,1)">
                                            <div class="d-flex justify-content-between">
                                                <span>Pagar <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                            </div>
                                        </button> -->

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once '../estructuras/pie.php';
