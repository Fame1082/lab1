<?php
 


  if(!empty($_POST["login"])&&!empty($_POST["password"]))
  {
     if($_POST["password"]==q321)
     {
       $admin = new Admin('Бил','Гейтс','администратор');
    
       echo $admin->infa();

     }else if($_POST["password"]==w123)
     {
       $client=new Client('Джо','Безос','клиент');
      echo $client->infa();
      }
     else if($_POST["password"]==e231)
     {
       $manager= new Manager('Ернест','Хемингуэй','менеджер');
       echo $manager->infa();
     }
     else{
      echo "Данные введены неверно!";
     }

  }
    class User{
     private $name;
     private $surname;
     private $job;

     public function __construct($name,$surname,$job ){
        $this->name = $name;
        $this->surname = $surname;
        $this->job=$job;
     }

     public  function us()
      {
        echo 'Здравствуйте  '.$this->name.' '.$this->surname.' вы '.$this->job.'. ';
      }

   }
  class Admin extends User{
     public   function infa()
      {
        parent::us();
        echo 'У вас есть доступ ко всем функциям  сайта ';
      }

      }
  class Client extends User{
     public  function infa()
      { 
        parent::us();
        echo 'Вам разрешен только просмотр  сайта';
      }

   }
  class Manager extends User{
     public  function infa()
      { 
        parent::us();
        echo 'У вас есть возможность удалять и добавлять новых пользовательй  ';
      }

  }


?>