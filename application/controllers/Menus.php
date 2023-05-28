<?php

    class Menus extends CI_Controller
    {
        //Constructor
        function __construct()
        {
            parent::__construct();
        }


        //Renderización de la vista que muestra los desayunos.
        public function desayunos(){
            //$this->load->view('header');...esto permitira que se cargue primero el menu.
            $this->load->view('header');
            $this->load->view('menus/desayunos');
            //$this->load->view('contenido');...esto me permite que se cargue el contenido en todos los enlaces.
            $this->load->view('contenidoDesayunos');
            //$this->load->view('footer');...esto permitira que se cargue primero el footer.
            $this->load->view('footer');
        }

        public function almuerzos(){
            //$this->load->view('header');...esto permitira que se cargue primero el menu.
            $this->load->view('header');
            $this->load->view('menus/almuerzos');
            //$this->load->view('contenido');...esto me permite que se cargue el contenido en todos los enlaces.
            $this->load->view('contenidoAlmuerzos');
            //$this->load->view('footer');...esto permitira que se cargue primero el footer.
            $this->load->view('footer');
        }

        public function meriendas(){
            //$this->load->view('header');...esto permitira que se cargue primero el menu.
            $this->load->view('header');
            $this->load->view('menus/meriendas');
            //$this->load->view('contenido');...esto me permite que se cargue el contenido en todos los enlaces.
            $this->load->view('contenidoMeriendas');
            //$this->load->view('footer');...esto permitira que se cargue primero el footer.
            $this->load->view('footer');
       
        }
    
        public function cartas(){
            //$this->load->view('header');...esto permitira que se cargue primero el menu.
            $this->load->view('header');
            $this->load->view('menus/cartas');
            //$this->load->view('contenidoCartas');...permite llamar al menu cartas
            $this->load->view('contenidoCartas');
            //$this->load->view('footer');...esto permitira que se cargue primero el footer.
            $this->load->view('footer');
        }

        public function compromiso(){
            //$this->load->view('header');...esto permitira que se cargue primero el menu.
            $this->load->view('header');
            $this->load->view('menus/compromiso');
            //$this->load->view('contenidoCartas');...permite llamar al menu cartas
            $this->load->view('contenidoCompromiso');
            //$this->load->view('footer');...esto permitira que se cargue primero el footer.
            $this->load->view('footer');
        }

        public function ubicacion(){
            //$this->load->view('header');...esto permitira que se cargue primero el menu.
            $this->load->view('header');
            $this->load->view('menus/ubicacion');
            //$this->load->view('contenidoCartas');...permite llamar al menu cartas
            $this->load->view('contenidoUbicacion');
            //$this->load->view('footer');...esto permitira que se cargue primero el footer.
            $this->load->view('footer');
        }
    }

  ?>
