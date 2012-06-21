CakephpEasyGrid
===============

This is a simple to use Cakephp addition to allow for easily adding Extjs Grids to your Cakephp applications without any knowledge of Extjs.  The EasyGrid Extjs extension will automatically generate the Extjs grid code.  All you have to worry about is your Cakephp code.  CakephpEasyGrid is very simple to use and install as it uses a modifed Scaffolding class for the CRUD functions required by Extjs Grids.  This makes development easier.  Once your application is ready for production, you can use the EeasyGridComponent to handle CRUD functions specific to Extjs.  

CakephpEasyGrid consists of these files:

EasyGridScaffold.php
===================
This is an subclass of the controller Scaffold class.  It contains methods to handle CRUD requests from the Extjs Grid.  The purpose of the EasyGridScaffold is to make development faster

EasyGridComponent.php
====================
A component that provides CRUD functions specific to Extjs grids.  When you want to move your code to procution, add create,read, update, destory methods in your controller.  In each of these functions, such as create,  all you have to do is call add $this->EasyGrid->create().  

EasyGridHelper.php
=================
View helper to choose options for your grid.
@todo add function for chooing CSS template to style the grid

Javascript Files
===============
@todo

Installation instructions
=========================
@todo

Example Usage
@todo  








