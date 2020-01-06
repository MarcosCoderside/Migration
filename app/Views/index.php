<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript">
            $(document).ready(function(){
                    $('#table').DataTable();
            });
    </script>

</head>
  
  <body>
      <nav class="nav bg-light">
        <li class="nav-item">
            <a class="nav-link text-muted font-weigth-bold" style="color:#777;font-weigth:500;font-size:18px !important" href="">Neurodesk</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-dark" href="">Painel</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-body" href="">Novo chamado</a>
        </li>

        <li class="nav-item">
            <select class="form-control">
                <option  value="">Relatórios</option>
            </select>
        </li>

        <li class="form-inline" style="margin-left:28rem">
            <input type="text" class="form-control" placeholder="Filtrar chamados">
        </li>

        <li class="nav-item ml-3">
            <select name="" id="" class="form-control">
                <option value="">Wesley</option>
                <a href="<?='login.php'?>"><option value="">Sair</option></a>
            </select>
        </li>
      </nav>
    <div class="container-fluid">
      <div class="row" style="margin-top:2rem;">
        <div class="col-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="">Atualizar</a><i class="fa fa-refresh" style="margin-left:15px;background-color:#ccc;border-radius:7px;padding:3px;"></i>
                </li>
                <div class="dropdown-divider"></div>
                <li class="nav-item">
                    <a class="btn btn-info text-left" style="background-color:#337ab7;padding:0.8rem .75rem !important" href="">Seus chamados não resolvidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size:14px !important" href="">Seus Chamados resolvidos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:14px !important" href="">Todos os chamados não resolvidos</a>
                </li>

            <div class="dropdown-divider"></div>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:14px" href="">Emails Pendentes</a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link" style="font-size:14px" href="">Emails Concluídos</a>
                </li>
            
            <div class="dropdown-divider"></div>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:14px" href="">Aguardando Os</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:14px" href="">Pendente Os</a>
                </li>

            
            <div class="dropdown-divider"></div>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:14px" href="">Chamados abertos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:14px" href="">Chamados pendentes</a>
                </li>
            
            
            <div class="dropdown-divider"></div>

                <li class="nav-item">
                    <a class="nav-link" href="">Todos os chamados</a>
                </li>
         
            </ul>
        </div>

        
        <div class="col-7">
            <table id="table" class="table table-striped">
                <thead>
                    <th>Estado</th>
                    <th>Cliente</th>
                    <th>Aberto em</th>
                    <th>Fechado em</th>
                    <th>Usuário</th>
                    <th>N. OS</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <div class="col-3">

        </div>

      </div>
    </div>

 

  
  
  </body>
</html>