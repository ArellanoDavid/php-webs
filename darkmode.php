<style>


:root {
    --color-fuente: #000000 ; /* Negro */
    --color-fondo: #ffffff ; /* Blanco */
}
.oscuro{
    background-color: var(--color-fondo) !important;
    color: var(--color-fuente) !important;
}
.dark{
    background-color: var(--color-fondo) !important;
    color: var(--color-fuente) !important;
}

body{
    background-color: var(--color-fondo) !important;
    color: var(--color-fuente) !important;
}
.navbar .nav-item{
  
    color: var(--color-fuente) !important;

}




[tema="dark"]{
    --color-fuente: white;
    --color-fondo: black;
}
#switch button {
            width: 80px;
            height: 80px;
            background-image: url('img/luna.png');
            background-size: cover;
           
        }




        div.btn-container{
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

div.btn-container i{
    display: inline-block;
    position: relative;
    top: -9px;
}

label {
    font-size: 13px;
    color: #424242;
    font-weight: 500;
}

.btn-color-mode-switch{
    display: inline-block;
    margin: 13px;
    position: relative;
}

.btn-color-mode-switch > label.btn-color-mode-switch-inner{
    margin: 0px;
    width: 140px;
    height: 30px;
    background: #E0E0E0;
    border-radius: 26px;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease;
    box-shadow: 0px 0px 8px 0px rgba(17, 17, 17, 0.34) inset;
    display: block;
}

.btn-color-mode-switch > label.btn-color-mode-switch-inner:before{
    content: attr(data-on);
    position: absolute;
    font-size: 12px;
    font-weight: 500;
    top: 7px;
    right: 20px;

}

.btn-color-mode-switch > label.btn-color-mode-switch-inner:after{
    content: attr(data-off);
    width: 70px;
    height: 26px;
    background: #fff;
    border-radius: 26px;
    position: absolute;
    left: 2px;
    top: 2px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0px 0px 6px -2px #111;
    padding: 5px 0px;
}

.btn-color-mode-switch > .alert{
    display: none;
    background: #FF9800;
    border: none;
    color: #fff;
}

.btn-color-mode-switch input[type="checkbox"]{
    cursor: pointer;
    width: 50px;
    height: 25px;
    opacity: 0;
    position: absolute;
    top: 0;
    z-index: 1;
    margin: 0px;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner{
    background: #151515;
    color: #fff;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:after{
    content: attr(data-on);
    left: 68px;
    background: #3c3c3c;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:before{
    content: attr(data-off);
    right: auto;
    left: 20px;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner{
    /*background: #66BB6A; */
    /*color: #fff;*/
}

.btn-color-mode-switch input[type="checkbox"]:checked ~ .alert{
    display: block;
}

/*mode preview*/
.dark-preview{
    background: #0d0d0d;
}

.dark-preview div.btn-container i.fa-sun-o{
    color: #777;
}

.dark-preview div.btn-container i.fa-moon-o{
    color: #fff;
    text-shadow: 0px 0px 11px #fff;
}

.white-preview{
    background: #fff;
}

.white-preview div.btn-container i.fa-sun-o{
    color: #ffa500;
    text-shadow: 0px 0px 16px #ffa500;
}

.white-preview div.btn-container i.fa-moon-o{
    color: #777;
}

p.by {
    
}

p.by a{
    text-decoration: none;
    color: #000;
}

.dark-preview p.by a{
    color: #777;
}

.white-preview p.by a{
    color: #000;
}






</style>
<script>
      
      
      
      document.documentElement.setAttribute('tema', 'light');

const colorSwitch = document.querySelector('#color_mode');

function cambiaTema(ev){
    if(document.documentElement.getAttribute('tema') === 'light'){
        document.documentElement.setAttribute('tema', 'dark');
    } else {
        document.documentElement.setAttribute('tema', 'light');
    }
}

colorSwitch.addEventListener('click', cambiaTema);








        
  </script>