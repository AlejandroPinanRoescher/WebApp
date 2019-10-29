<?php 

/**
 * \file index.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief Includes the libraries and creates the WebApp
 *
 */
require_once('library/database.php');
require_once('library/controller.php');
require_once('library/view.php');
require_once('library/model.php');
require_once('library/WebApp.php');

require_once('config/config.php');

$app = new WebApp();

?>