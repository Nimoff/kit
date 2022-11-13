<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="public/style/main.css">
  <title><?= $title ?></title>
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div class="top_header">
        <div class="logo">КИТ</div>
        <div class="admin_enter">Привет, #</div>
      </div>
      <nav class="nav">
        <ul>
          <li class="active"><a href="#">Главная</a></li>
          <li><a href="#">Списки</a></li>
          <li><a href="#">Архив</a></li>
          <li><a href="#">Воспитатели</a></li>
        </ul>
      </nav>
    </header>
    <div class="main">
      <div class="all_filtr">
        <div class="filtr">

          <form class="form_filtr" action="index.html" method="post">
            <select class="form-select padding_left" aria-label="Default select example" name="filtr">
              <option selected>Алфавит</option>
              <option value="">Возраст</option>
              <option value="2">Зачисление</option>
              <option value="3">Декабристов</option>
              <option value="3">Ясный</option>
            </select>

            <div class="form-group padding_left">
              <input type="text" class="form-control" id="inputPassword2" placeholder="От">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="inputPassword2" placeholder="До">
            </div>
            <button type="submit" class="btn btn-primary padding_left">Фильтр</button>

          </form>

        </div>
        <div class="search">

            <form class="form_search" action="index.html" method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="inputPassword2" placeholder="От">
              </div>
              <button type="submit" class="btn btn-success padding_left">Поиск</button>
            </form>

            <button type="button" class="btn btn-outline-primary padding_left">Добавить воспитанника</button>
        </div>
      </div>
      <div class="items_filtr">
        <div class="item_f">Всего детей: <b>79</b></div>
        <div class="item_f"><a href="#">Мальчики: <b>53</b></a></div>
        <div class="item_f"><a href="#">Девочки: <b>26</b></a></div>
        <div class="item_f"><a href="#">Инвалиды: <b>4</b></a></div>
        <div class="item_f"><a href="#">Временные: <b>2</b></a></div>
        <div class="item_f"><a href="#">ОВЗ: <b>13</b></a></div>
        <div class="item_f"><a href="#">Декабристов: <b>41</b></a></div>
        <div class="item_f"><a href="#">Ясный: <b>38</b></a></div>
        <div class="item_f"><a href="#">Сироты: <b>12</b></a></div>
        <div class="item_f"><a href="#">БОМЖ: <b>5</b></a></div>
      </div>
    </div>

    <?= $content ?>
    <footer class="footer">©Кит</footer>
  </div>
  <script src="public/scripts/main.js"></script>
</body>
</html>
