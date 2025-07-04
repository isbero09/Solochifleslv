<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SOLO CHIFLES</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Paginacion -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/bs5/dt-2.2.1/datatables.min.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
        <!-- Navbar usuario-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="index.html">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="navbar-brand ps-3 mt-3 text-center" href="{{ route('inicio') }}"><img
                                src="{{ asset('img/logo transparebte.png') }}" alt="" width="80px"
                                height="75"></a>
                        <a class="navbar-brand ps-3 mt-4 text-center" href="{{ route('inicio') }}"><img
                                src="{{ asset('img/Diseño sin fondo.PNG') }}" alt="" width="165px"
                                height="55"></a>
                        <div class="sb-sidenav-menu-heading">Principal</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Usuarios
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
                                <a class="nav-link" href="{{ route('permisos.index') }}">Permisos</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseAdmi" aria-expanded="false" aria-controls="collapseAdmi">
                            <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                            Administración
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseAdmi" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('compras.index') }}">Compras</a>
                                <a class="nav-link" href="{{ route('produccion.index') }}">Produccion</a>
                                <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
                                <a class="nav-link" href="{{ route('venta.index') }}">Ventas</a>
                                <a class="nav-link" href="{{ route('ventaproducto.index') }}">Ventas-Productos</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">LISTADO DE PRODUCCION</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            <button type="button" class="btn btn-success btn-icon-split"
                                id="OpenCreateModalProduccion">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Agregar Producción</span>
                            </button>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <button class="btn btn-primary float-end" onclick="window.print()">
                                <i class="fas fa-print"></i> Imprimir Reporte
                            </button>
                        </div>
                        <div class="card-body">
                            <table class="table" id="proccTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Cantidad</th>
                                        <th>Fecha</th>
                                        <th>Producto</th>
                                        <th>Compra</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="proccTable">
                                    @forelse ($produccions as $produccion)
                                        <tr>
                                            <td>{{ $produccion->Idproduccion }}</td>
                                            <td>{{ $produccion->Cantidad }}</td>
                                            <td>{{ $produccion->Fecha }}</td>
                                            <td>{{ $produccion->producto ? $produccion->producto->Nombre : 'Producto no encontrado' }}
                                            </td>
                                            <td>{{ $produccion->compra ? $produccion->compra->Descripcion : 'Compra no encontrada' }}
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button class="btn btn-success btn-editProcc"
                                                        data-idproduccion="{{ $produccion->Idproduccion }}"
                                                        data-cantidad="{{ $produccion->Cantidad }}"
                                                        data-fecha="{{ $produccion->Fecha }}"
                                                        data-idproductos="{{ $produccion->IdProductos }}"
                                                        data-idcompras="{{ $produccion->Idcompras }}">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </button>

                                                    <button class="btn btn-danger btn-deleteProcc"
                                                        data-idproduccion="{{ $produccion->Idproduccion }}">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>SIN CONTENIDO</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Modal para crear Producciones CORRECTO -->
            <div class="modal fade" id="createModalProcc" tabindex="-1" aria-labelledby="createModalLabelProcc"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Nueva Produccion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-bodyRol">
                            <!-- Formulario de edición -->
                            <form method="POST" action="{{ route('produccion.store') }}" style="padding: 10px;">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cantidadProcc" class="form-label">Cantidad:</label>
                                        <input type="text" class="form-control" name="Cantidad" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="dateProcc" class="form-label">Fecha:</label>
                                        <input type="date" class="form-control" name="Fecha" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="selecProcc" class="form-label">Producto:</label>
                                        <select class="form-select" name="IdProductos" required>
                                            <option value="" disabled selected>Seleccione un producto</option>
                                            <option value="101">Chifle</option>
                                            <option value="102">Maduritos</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="compraProcc" class="form-label">Compra:</label>
                                        <input type="text" class="form-control" name="Idcompras" required>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="saveChanges">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal de Produccion Editar CORRECTO-->
            <div class="modal fade" id="editModalProcc" tabindex="-1" aria-labelledby="editModalProccLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" id="createProccForm" action="">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalProccLabel">Editar Producción</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="editCantidadProcc" class="form-label">Cantidad</label>
                                    <input type="text" class="form-control" id="editCantidadProcc"
                                        name="Cantidad" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editFechaProcc" class="form-label">Fecha</label>
                                    <input type="date" class="form-control" id="editFechaProcc" name="Fecha"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="editProductoProcc" class="form-label">Producto</label>
                                    <select class="form-select" id="editProductoProcc" name="IdProductos" required>
                                        <option value="">Seleccione un producto</option>
                                        <option value="1">Chifle</option>
                                        <option value="2">Maduritos</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="editCompraProcc" class="form-label">Compra</label>
                                    <input type="text" class="form-control" id="editCompraProcc" name="Idcompras"
                                        required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal de Eliminar Produccion CORRECTO-->
            <div class="modal fade" id="deleteModalProcc" tabindex="-1" aria-labelledby="deleteModalProccLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalProccLabel">Eliminar Producción</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="delete-form-procc"
                                action="{{ route('produccion.destroy', ['produccion' => '::id::']) }}">
                                @csrf
                                @method('DELETE')
                                <p>¿Estás seguro de que deseas eliminar esta producción?</p>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        id="cancelDeleteProccBtn">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    <!-- script modal crear CORRECTO FUNCIONAL-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const createModalProcc = new bootstrap.Modal(document.getElementById('createModalProcc'));
            const openCreateModalBtn = document.getElementById('OpenCreateModalProduccion');
            const saveChangesBtn = document.getElementById('saveChanges');

            // Abrir el modal al hacer clic en el botón
            openCreateModalBtn.onclick = () => createModalProcc.show();

            // Enviar el formulario cuando se haga clic en "Guardar"
            saveChangesBtn.onclick = () => {
                document.querySelector('#createModalProcc form').submit();
            };
        });
    </script>

    <!-- Script modal editar con delegación de eventos CORRECTO FUNCIONAL-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editForm = document.getElementById('createProccForm');
            const modal = new bootstrap.Modal(document.getElementById('editModalProcc'));

            // Escuchar clics dentro del cuerpo de la tabla de producciones
            document.getElementById('proccTable').addEventListener('click', function(e) {
                if (e.target.closest('.btn-editProcc')) {
                    const button = e.target.closest('.btn-editProcc');

                    const id = button.getAttribute('data-idproduccion');
                    const cantidad = button.getAttribute('data-cantidad');
                    const fecha = button.getAttribute('data-fecha');
                    const producto = button.getAttribute('data-idproductos');
                    const compra = button.getAttribute('data-idcompras');

                    // Establecer la URL del formulario para el método PUT
                    editForm.action = `/produccion/${id}`;

                    // Llenar los campos del formulario con los datos del botón
                    document.getElementById('editCantidadProcc').value = cantidad;
                    document.getElementById('editFechaProcc').value = fecha;
                    document.getElementById('editProductoProcc').value = producto;
                    document.getElementById('editCompraProcc').value = compra;

                    // Mostrar el modal
                    modal.show();
                }
            });
        });
    </script>

    <!--Script modal eliminar con delegación de eventos CORRECTO FUNCIONAL-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModalProcc'));
            const deleteForm = document.getElementById('delete-form-procc');
            const baseDeleteAction = deleteForm.getAttribute('action'); // debe contener ::id::

            document.getElementById('proccTable').addEventListener('click', function(e) {
                if (e.target.closest('.btn-deleteProcc')) {
                    const button = e.target.closest('.btn-deleteProcc');
                    const id = button.getAttribute('data-idproduccion');
                    const action = baseDeleteAction.replace('::id::', id);
                    deleteForm.setAttribute('action', action);
                    deleteModal.show();
                }
            });
        });
    </script>
</body>

</html>
