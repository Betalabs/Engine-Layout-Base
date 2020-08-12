<?php

/*
 | Layout base package helpers configurations.
 */
return [

    /*
     | Server data loader json content for test scenarios.
     |
     | This could be changed to be used in multiple scenarios to get server
     | data json and populate page header.
     |
     | Possible values:
     | - logged-in-and-empty-cart.json
     |   Used to get logged in client details and empty cart data.
     |
     | - logged-in-and-filled-cart.json
     |   Used to get logged in client details and filled cart data.
     |
     | - not-logged-in-and-empty-cart.json
     |   Used to get null logged in client details and empty cart data.
     |
     | - not-logged-in-and-filled-cart.json
     |   Used to get logged in client details and filled cart data.
     |
     | Default: logged-in-and-filled-cart.json.
     */
    'server-data' => 'logged-in-and-filled-cart.json'

];