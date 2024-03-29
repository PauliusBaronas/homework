
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php

/*    Sukurkite sesijų klasę - wrapper’į. Turėtų būti tokie metodai: sukurti sesijos kintamąjį, gauti sesijos kintamąjį, ištrinti sesijos kintamąjį, patikrinti egzistoja sesijos kintamasis.
Sesija turėtų prasidėti (session_start) __construct metode. (edited) */


    class SessionMani
    {
    public function __construct()
     {
    session_start();
    }
    public function createSession()
    {
    $_SESSION['log'] = [];
    }
    public function createVar($var = 'default')
    {
    array_push($_SESSION['log'], $var);
    }
    public function showVars($startpos = 0)
    {
    return $part = array_slice($_SESSION['log'], $startpos);
    }
    public function deleteVar($startpos = 0)
    {
    array_splice($_SESSION['log'], $startpos);
    }
    public function checkExist($key=0)
    {
    if (array_key_exists($key, $_SESSION['log']))
        {
            return $ans =  "egzistoja";
        } else {
           echo $ans = "neegzistuoja";
        }
    }
    }

    $wrapper = new SessionMani;
    echo $wrapper->createSession();
    echo $wrapper->createVar();
    var_dump($wrapper->showVars(0));
    echo $wrapper->deleteVar();
    var_dump($wrapper->showVars(0));
    echo $wrapper->checkExist();


/*Sukurkite žurnalo klasę. Ši klasė turėtų turėti šiuos metodus: išsaugoti žurnale, gauti paskutinius N įrašų, išvalyti žurnalą.*/

    class Journal
    {

    public function __construct()
     {
    $this->log = array();
    }
    public function saveToLog($var = 'default')
    {
    array_push($this->log, $var);
    }
    public function showLog($startpos = 0)
    {
    return $part = array_slice($this->log, $startpos);

    }
    public function deleteLog($startpos = 0)
    {
    $this->log = array();
    }
    }


    $wrapper = new Journal;
    echo $wrapper->saveToLog("pirmas");
    echo $wrapper->saveToLog("antras");
    echo $wrapper->saveToLog("trečias");
    echo $wrapper->saveToLog("ketvirtas");
    var_dump($wrapper->showLog());
    echo $wrapper->deleteLog();
    var_dump($wrapper->showLog(4));


    class FormClass
    {
    public function open($action = 'index.php', $method = 'GET', $class ='')
        {
    return sprintf('<form action="%s" method="%s" class="%s">', $action, $method, $class);
        }
        public function input($type = 'text', $value = '', $placeholder = '', $class ='')
        {
        return sprintf('<input type="%s" value="%s" placeholder="%s" class="%s">', $type, $value, $placeholder, $class);
        }
        public function password($placeholder = '')
        {
        return $this->input('password', '', $placeholder, 'border border-danger');
        }
        public function submit($title = '', $class ='', $type = 'button')
        {
        return sprintf('<button type="%s" class="%s" >%s</button>', $type, $class, $title);
        }
        public function textarea($placeholder = '', $class, $value = '')
        {
        return sprintf('<textarea placeholder="%s" class = "%s">%s</textarea>', $placeholder, $class, $value);
        }
        public function label($class = '', $value = '')
        {
        return sprintf('<label class="%s">%s</label>', $class, $value);
        }
        public function close()
        {
        return '</form>';
    }
    }
    $form = new FormClass;
    echo $form->open('index.php', 'POST',"border border-danger");
    // <form action="index.php" method="POST">
        echo $form->input('text', '', 'Enter value',"border border-danger");
        // <input type="text" value="!!!">
        echo $form->password('i can change this');
        // <input type="password" value="!!!">
        echo $form->submit('go',"border border-danger");
        // <button type="submit">go</button>
        echo $form->textarea('Enter text','border border-danger');
        // <textarea placeholder="123">!!!</textarea>
        echo $form->label('border border-danger','example');
        // labelio pvz
        echo $form->close();

        // </form>






    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




