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
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
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
                    <h1 class="mt-4">LISTADO DE COMPRAS</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            <button type="button" class="btn btn-success btn-icon-split" id="OpenCreateModalCompra">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Agregar Compra</span>
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
                            <table class="table" id="comprasTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Descripcion</th>
                                        <th>Fecha</th>
                                        <th>Cantidad</th>
                                        <th>Costo Total</th>
                                        <th>Proveedor</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="comprasBody">
                                    @forelse ($compras as $compra)
                                        <tr>
                                            <td>{{ $compra->Idcompras }}</td>
                                            <td>{{ $compra->Descripcion }}</td>
                                            <td>{{ $compra->Fecha }}</td>
                                            <td>{{ $compra->Cantidad }}</td>
                                            <td>{{ $compra->Costototal }}</td>
                                            <td>{{ $compra->usuario ? $compra->usuario->Nombres . ' ' . $compra->usuario->Apellidos : 'Usuario no encontrado' }}
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button class="btn btn-success btn-editCompra"
                                                        data-idcompras="{{ $compra->Idcompras }}"
                                                        data-descripcion="{{ $compra->Descripcion }}"
                                                        data-fecha="{{ $compra->Fecha }}"
                                                        data-cantidad="{{ $compra->Cantidad }}"
                                                        data-costototal="{{ $compra->Costototal }}"
                                                        data-cedula="{{ $compra->Cedula }}">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </button>

                                                    <button class="btn btn-danger btn-deleteCompra"
                                                        data-idcompras="{{ $compra->Idcompras }}">
                                                        <i class="fa-solid fa-trash "></i>
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

            <!-- Modal de Compras Crear CORRECTO-->
            <div class="modal fade" id="createModalCompra" tabindex="-1" aria-labelledby="createModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Nueva Compra</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-bodyRol">
                            <!-- Formulario de edición -->
                            <form method="POST" action="{{ route('compras.store') }}" action=""
                                style="padding: 15px;">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="descripcionCom" class="form-label">Descripcion:</label>
                                        <input type="text" class="form-control" name="Descripcion" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="dateCom" class="form-label">Fecha:</label>
                                        <input type="date" class="form-control" name="Fecha" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cantidadCom" class="form-label">Cantidad:</label>
                                        <input type="number" class="form-control" name="Cantidad" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="costoCom" class="form-label">Costo Total:</label>
                                        <input type="text" class="form-control" name="Costototal" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="proveedorCom" class="form-label">Proveedor:</label>
                                        <input type="text" class="form-control" name="Cedula" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" id="saveChanges">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal de Compras Editar CORRECTO-->
            <div class="modal fade" id="editCompraModal" tabindex="-1" aria-labelledby="editCompraLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" id="editCompraForm" action="">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="editCompraLabel">Editar Compra</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="editDescripcion" class="form-label">Descripción</label>
                                    <input type="text" class="form-control" id="editDescripcion"
                                        name="Descripcion" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editFecha" class="form-label">Fecha</label>
                                    <input type="date" class="form-control" id="editFecha" name="Fecha"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="editCantidad" class="form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="editCantidad" name="Cantidad"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="editCostoTotal" class="form-label">Costo Total</label>
                                    <input type="text" class="form-control" id="editCostoTotal" name="Costototal"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="editCedula" class="form-label">Proveedor</label>
                                    <input type="text" class="form-control" id="editCedula" name="Cedula"
                                        required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal para eliminar compra CORRECTO-->
            <div class="modal fade" id="deleteModalCompra" tabindex="-1" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Eliminar Compra</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="delete-form"
                                action="{{ route('compras.destroy', ['compra' => '::id::']) }}">
                                @csrf
                                @method('DELETE')
                                <p>¿Estás seguro de que deseas eliminar esta compra?</p>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        id="cancelDeleteBtn">Cancelar</button>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-2.2.1/datatables.min.js"></script>

    <!-- script modal crear  CORRECTO FUNCIONAL-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const createModalCompra = new bootstrap.Modal(document.getElementById('createModalCompra'));
            const openEditModalBtn = document.getElementById('OpenCreateModalCompra');
            const saveChangesBtn = document.getElementById('saveChanges');

            // Abrir modal al hacer clic en el botón
            openEditModalBtn.onclick = () => createModalCompra.show();

            // Guardar cambios y cerrar el modal (si quieres cerrar al guardar)
            saveChangesBtn.onclick = () => {
                // Aquí podrías validar o hacer otra lógica antes de enviar
                document.querySelector('#createModalCompra form').submit(); // envía el formulario
                // createModalCompra.hide(); // Descomenta si quieres cerrar el modal sin enviar
            };
        });
    </script>

    <!-- Script modal editar con delegación de eventos FUNCIONAL-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editForm = document.getElementById('editCompraForm');
            const modal = new bootstrap.Modal(document.getElementById('editCompraModal'));

            document.getElementById('comprasBody').addEventListener('click', function(e) {
                if (e.target.closest('.btn-editCompra')) {
                    const button = e.target.closest('.btn-editCompra');

                    const id = button.getAttribute('data-idcompras');
                    const descripcion = button.getAttribute('data-descripcion');
                    const fecha = button.getAttribute('data-fecha');
                    const cantidad = button.getAttribute('data-cantidad');
                    const costo = button.getAttribute('data-costototal');
                    const cedula = button.getAttribute('data-cedula');

                    editForm.action = `/compras/${id}`;

                    document.getElementById('editDescripcion').value = descripcion;
                    document.getElementById('editFecha').value = fecha;
                    document.getElementById('editCantidad').value = cantidad;
                    document.getElementById('editCostoTotal').value = costo;
                    document.getElementById('editCedula').value = cedula;

                    modal.show();
                }
            });
        });
    </script>

    <!--Script modal eliminar con delegación de eventos FUNCIONAL-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModalCompra'));
            const deleteForm = document.getElementById('delete-form');
            const baseDeleteAction = deleteForm.getAttribute('action'); // debe contener ::id::

            document.getElementById('comprasBody').addEventListener('click', function(e) {
                if (e.target.closest('.btn-deleteCompra')) {
                    const button = e.target.closest('.btn-deleteCompra');
                    const id = button.getAttribute('data-idcompras');
                    const action = baseDeleteAction.replace('::id::', id);
                    deleteForm.setAttribute('action', action);
                    deleteModal.show();
                }
            });
        });
    </script>
</body>

</html>
