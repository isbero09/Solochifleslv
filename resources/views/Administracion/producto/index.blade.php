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
                                <a class="nav-link" href="p{{ route('permisos.index') }}">Permisos</a>
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
                    <h1 class="mt-4">LISTADO DE PRODUCTOS</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            <button type="button" class="btn btn-success btn-icon-split"
                                id="OpenCreateModalProducto">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Agregar Producto</span>
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
                            <table class="table" id="prodTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Stock</th>
                                        <th>Activo</th>
                                        <th>Idempresa</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="prodBody">
            @forelse ($productos as $producto)
                <tr>
                    <td>{{ $producto->IdProductos }}</td>
                    <td>{{ $producto->Nombre }}</td>
                    <td>{{ $producto->Descripcion }}</td>
                    <td>{{ $producto->Precio }}</td>
                    <td>{{ $producto->Stock }}</td>
                    <td>{{ $producto->Activo ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $producto->Idempresa }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <button class="btn btn-success btn-editProd"
                                data-idproductos="{{ $producto->IdProductos }}"
                                data-nombre="{{ $producto->Nombre }}"
                                data-descripcion="{{ $producto->Descripcion }}"
                                data-precio="{{ $producto->Precio }}"
                                data-stock="{{ $producto->Stock }}"
                                data-idempresa="{{ $producto->Idempresa }}"
                                data-activo="{{ $producto->Activo }}">
                                <i class="fa-solid fa-pen"></i>
                            </button>

                            <button class="btn btn-danger btn-deleteProd"
                                data-idproductos="{{ $producto->IdProductos }}">
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

            <!-- Modal para crear Productos CORRECTO  -->
            <div class="modal fade" id="createModalProducto" tabindex="-1"
                aria-labelledby="createModalLabelProducto" aria-hidden="true">
                <div class="modal-dialog modal-lg"> <!-- Hacemos el modal un poco más ancho -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Nuevo Producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('productos.store') }}" style="padding: 15px;">
                                @csrf

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="nombreProducto" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" name="Nombre" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="precioProducto" class="form-label">Precio:</label>
                                        <input type="text" step="0.01" class="form-control" name="Precio"
                                            required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="stockProducto" class="form-label">Stock:</label>
                                        <input type="number" class="form-control" name="Stock" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="activoProducto" class="form-label">Activo:</label>
                                        <select class="form-select" name="Activo" required>
                                            <option value="" disabled selected>Elige un estado</option>
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="idEmpresa" class="form-label">ID Empresa:</label>
                                        <input type="number" class="form-control" name="Idempresa" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="descripcionProducto" class="form-label">Descripción:</label>
                                        <textarea class="form-control" name="Descripcion" rows="3" required></textarea>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" id="saveProducto">Guardar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal para editar Productos CORRECTO  -->
            <div class="modal fade" id="editProductoModal" tabindex="-1" aria-labelledby="editProductoLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg"> <!-- Igual que en el modal de creación -->
                    <div class="modal-content">
                        <form method="POST" id="editProductoForm" action="">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="editProductoLabel">Editar Producto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="editNombre" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="editNombre" name="Nombre"
                                            required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="editPrecio" class="form-label">Precio:</label>
                                        <input type="text" step="0.01" class="form-control" id="editPrecio"
                                            name="Precio" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="editStock" class="form-label">Stock:</label>
                                        <input type="number" class="form-control" id="editStock" name="Stock"
                                            required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="editActivo" class="form-label">Activo:</label>
                                        <select class="form-select" id="editActivo" name="Activo" required>
                                            <option value="" disabled selected>Elige un estado</option>
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="editIdEmpresa" class="form-label">ID Empresa:</label>
                                        <input type="number" class="form-control" id="editIdEmpresa"
                                            name="Idempresa" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="editDescripcion" class="form-label">Descripción:</label>
                                        <textarea class="form-control" id="editDescripcion" name="Descripcion" rows="3" required></textarea>
                                    </div>
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

            <!-- Modal para eliminar Productos CORRECTO  -->
            <div class="modal fade" id="deleteModalProducto" tabindex="-1" aria-labelledby="deleteProductoLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteProductoLabel">Eliminar Producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="deleteProductoForm"
                                action="{{ route('productos.destroy', ['producto' => '::id::']) }}">
                                @csrf
                                @method('DELETE')
                                <p>¿Estás seguro de que deseas eliminar este producto?</p>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        id="cancelDeleteProductoBtn">Cancelar</button>
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

    <!-- script modal crear CORRECTO FUNCIONAL -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const createModalProducto = new bootstrap.Modal(document.getElementById('createModalProducto'));
            const openCreateModalBtn = document.getElementById('OpenCreateModalProducto');
            const saveChangesBtn = document.getElementById('saveProducto');

            // Abrir modal al hacer clic en el botón
            openCreateModalBtn.onclick = () => createModalProducto.show();

            // Guardar cambios y cerrar el modal (si quieres cerrar al guardar)
            saveChangesBtn.onclick = () => {
                // Aquí podrías validar o hacer otra lógica antes de enviar
                document.querySelector('#createModalProducto form').submit(); // envía el formulario
                // createModalProducto.hide(); // Descomenta si quieres cerrar el modal sin enviar
            };
        });
    </script>

    <!-- script modal editar CORRECTO FUNCIONAL-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editForm = document.getElementById('editProductoForm');
            const modal = new bootstrap.Modal(document.getElementById('editProductoModal'));

            // Delegación de eventos global para compatibilidad con DataTables
            document.addEventListener('click', function(e) {
                const button = e.target.closest('.btn-editProd');
                if (button) {
                    const id = button.getAttribute('data-idproductos');
                    const nombre = button.getAttribute('data-nombre');
                    const precio = button.getAttribute('data-precio');
                    const stock = button.getAttribute('data-stock');
                    const activo = button.getAttribute('data-activo');
                    const idempresa = button.getAttribute('data-idempresa');
                    const descripcion = button.getAttribute('data-descripcion');

                    editForm.action = `/productos/${id}`;
                    document.getElementById('editNombre').value = nombre;
                    document.getElementById('editPrecio').value = precio;
                    document.getElementById('editStock').value = stock;
                    document.getElementById('editActivo').value = activo;
                    document.getElementById('editIdEmpresa').value = idempresa;
                    document.getElementById('editDescripcion').value = descripcion;

                    modal.show();
                }
            });
        });
    </script>

    <!-- script modal eliminar CORRECTO FUNCIONAL-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModalProducto'));
            const deleteForm = document.getElementById('deleteProductoForm');
            const baseDeleteAction = deleteForm.getAttribute('action'); // debe contener ::id::

            // Delegación de eventos global para compatibilidad con DataTables
            document.addEventListener('click', function(e) {
                const button = e.target.closest('.btn-deleteProd');
                if (button) {
                    const id = button.getAttribute('data-idproductos');
                    const action = baseDeleteAction.replace('::id::', id);
                    deleteForm.setAttribute('action', action);
                    deleteModal.show();
                }
            });
        });
    </script>
</body>

</html>
