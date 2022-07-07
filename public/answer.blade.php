<!DOCTYPE html>
<html lang="ru">
    <head>
            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->
        
        <title>Отправка ответа клиенту</title>
        <meta charset='utf-8'/>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
        <link href="http://194.67.116.171/css/bootstrap.css" rel="stylesheet">
        <link rel="shortcut icon" href="http://194.67.116.171/img/tiunoff.png" type="image/png">
        <link rel="stylesheet" href="http://194.67.116.171/css/answer.css"/>
        <link rel="stylesheet" href="http://194.67.116.171/css/nav-style.css"/>
    </head>
    <body>
      
        
        <!-- - - - - - - - - - - - - - - - - - - N A V B A R - - - - - - - - - - - - - - - - - - - - - -->
        
        
        <nav class="navbar navbar-expand-lg" style="background-color: black;"></nav>
        
        <div class="p-3 mb-2 bg-dark">
            <ul class="nav justify-content-end">
            <li class="nav-item col-12 col-md-11">
            <a class="nav-link text-white" href="index.html">Главная</a>
            </li>
            <li class="nav-item col-12 col-md-1">
            <button type="button" onclick="location.href='http://194.67.116.171/leave'" class="btn btn-style">Выйти</button>
            </li>
            </ul>
        </div>
      
    
        <!-- - - - - - - - - - - - - - - - - - - A N S W E R - - - - - - - - - - - - - - - - - - - - - - -->
        
        
        <div class = "container-fluid">
            <div class="row">
                <div class="col-md-12 mt-4 mb-3 text-center title_lk">
                    <h1 class = "py-3">ЛИЧНЫЙ КАБИНЕТ</h1>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-5 text-center">
                <h3>ОТПРАВКА ОТВЕТА КЛИЕНТУ</h3>
            </div>
            
            <form class="position-relative top-0 start-50 translate-middle-x" method="POST" onsubmit="return false;" accept-charset="UTF-8">
                @csrf
                <div class="mb-3">
                    <textarea id="answer" class="form-control w-75 p-3" rows="10" placeholder = "текст ответа" required></textarea>
                </div>
                <button type="button" id="mybutt" onclick="return false;" class="btn btn-style position-relative top-0 start-50 translate-middle-x mb-5" style="color: black;">Отправить</button>
            </form>
        </div>
        
    
        <!-- - - - - - - - - - - - - - - - - - F  O  O  T  E  R - - - - - - - - - - - - - - - - - - - - -->
    
        <footer class="bg-dark text-center text-white">
            <div class="container p-4">
              <section>
                <div class="row">
                  <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Контактная информация:</h5>
                        +7-918-931-39-32
                  </div>
                  <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Адрес:</h5>
                        г. Краснодар, ул. Красная 32
                  </div>
                </div>
              </section>
            </div>
          
            <div class="text-center p-3" style="background-color: black;">
              © 2022. Tiunoff bank, официальный сайт.
            </div>
        </footer> 
    </body>
    <script src="http://194.67.116.171/js/jquery_v3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="http://194.67.116.171/js/bootstrap.bundle.js"></script>
    <script src="http://194.67.116.171/js/clerk/answer.js"></script>
</html>