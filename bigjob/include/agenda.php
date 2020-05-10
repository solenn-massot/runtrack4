<?php $name = $_SESSION['user']->getName();?>
<div class="row" id="error">
<div class="row">
            <h3 class="col l12 center-align">Bienvenue <?php echo $name ?></h3>
        </div>
        <div class="row valign-wrapper">
            <div id="calendar" class="calendar col s12 m6 l6">

            </div>
            <div id="auth" class="bk-s col s12 m4 l4">
                <h4 class="center-align">Vos demandes</h4>
            </div>
        </div>
        <?php if($_SESSION['user']->getGrade() == "admin" || $_SESSION['user']->getGrade() == "modo")
        {
            ?>
            <div class="row valign-wrapper">
            <h3>Gérer les demandes</h3>
            <div id="modo">

            </div>
        </div>
        <?php
        }
        ?>
        <?php if($_SESSION['user']->getGrade() == "admin")
        {
            ?>
            <div class="row valign-wrapper">
            <h3>Gérer les rangs</h3>
            <div id="admin">

            </div>
        </div>
        <?php
        }
        ?>
        
        
</div>
<script type="text/javascript" src="js/agenda.js"></script>

   