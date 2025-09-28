<?php
    if (isset($_COOKIE['access_level']) && $_COOKIE['access_level'] == 'admin') {
        header("Content-Type: text/plain");
        echo "
        __      _
       / /_  __(_)___  ___
      / __ \/ / / __ \/ _ \
     / / / / / / / / /  __/
    /_/ /_/_/_/_/ /_/\___/

    Welcome, roadie! You're in!
    Here's the lost track list for 'Neon Nights':

    1. Midnight Drive
    2. Laser Dreams
    3. Starlight Runner

    Flag: UMBC_CTF{C00k13s_4r3_An_4dm1ns_B3st_Fr13nd}
        ";
    } else {
        setcookie("access_level", "guest", time() + 3600);
        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <title>VIP Access</title>
            <style>
                body { background-color: #111; color: #0f0; font-family: 'Courier New', monospace; text-align: center; padding-top: 50px; }
                input { background-color: #333; color: #0f0; border: 1px solid #0f0; }
            </style>
        </head>
        <body>
            <h1>VIP Backstage Area</h1>
            <p>Password Required.</p>
            <form method='post'>
                <input type='password' name='pass' placeholder='Password...'>
                <input type='submit' value='Login'>
            </form>
        </body>
        </html>
        ";
    }
?>
