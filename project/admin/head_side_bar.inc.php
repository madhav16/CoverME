<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="dash.php" class="nav-link">
                    <span class="link-text">Main Dash</span>
                   
                    <img class="s" style="width: 2rem;" src="menu.svg" />
                </a>
            </li>
            <li class="nav-item">
                <a href="Skin_Management.php" class="nav-link">
                    <span class="link-text">Skin<br/>Management</span>
                    <img class="s" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgaWQ9IlMiPjxwYXRoIGQ9Im0yNTkuODIzIDUxMmMxNTIuNjY2IDAgMjA3LjA1Ni04Mi43OTcgMjA3LjA1Ni0xNTkuMzM1IDAtMTE2LjQxNS04OC4wMzQtMTQ1LjQ0Mi0xODkuNDM0LTE2OS4zNTEtNDguNjMzLTExLjQ1NS05MC42My0yMS4zNTctOTAuNjMtNDQuMjI0IDAtMjQuMTg1IDQzLjQ3Ny0zMC41NzEgNjYuNDYtMzAuNTcxIDc3LjQ0NiAwIDY1LjgyMiA0NC42MTggNzUuNDk4IDY3LjYxN2wxMjQuODkzLTUuMjg4Yy0xLjk4MS00LjM5NSAxNy43NDItMTcwLjg0OC0xOTkuNDA5LTE3MC44NDgtMTQwLjI1OSAwLTE5MC4wMzQgNzguNzk4LTE5MC4wMzQgMTQ1LjQxOSAwIDExNC4yNzIgMTA5Ljk1MSAxNDAuNzI4IDE5MC4yMzkgMTYwLjA0OSA0Mi4wNzMgMTAuMTMyIDg1LjU3NiAxOC4xNjggODUuNTc2IDQ3LjUyIDAgMzguNjEzLTQ5LjgwNSA0OC45MTEtNzkuMjMzIDQ4LjkxMS05MS4yNzMgMC04OC4wMjctODAuMTktOTIuNDQ2LTkwLjEzMmwtMTIzLjIzOCAxMS41ODdjNC40NSA5LjU1My01LjU4IDE4OC42NDYgMjE0LjcwMiAxODguNjQ2eiIvPjwvZz48L3N2Zz4=" />
                 
                </a>
            </li>
            <li class="nav-item">
                <a href="case_management.php" class="nav-link">
                    <span class="link-text">Case<br/>Management</span>
                    <img class="x" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgaWQ9IkMiPjxwYXRoIGQ9Im0yNjMuOTYxIDUxMmMxODguNzA2IDAgMjE1LjUzLTE3MC41MDEgMjE4Ljc3NC0xNzUuODE0bC0xMjMuNzUtMzcuNzY0Yy00LjMwMSA5LjA4MS03LjEyNCAxMDIuNDY2LTk2LjAwNiAxMDIuNDY2LTY4LjYxMyAwLTEwMy40MDMtNDkuNzAyLTEwMy40MDMtMTQ3Ljc0NCAwLTk0LjI0OCAzNS40NDktMTQyLjAzMSAxMDUuMzgxLTE0Mi4wMzEgODMuMDM3IDAgODguNDA1IDc3LjE4IDkwLjQ4MyA4MC44NDVsMTI2LjQwMS0yOS4wNzdjLTMuMjU5LTQuOTc1LTI3LjU3NS0xNjIuODgxLTIxMS45NjItMTYyLjg4MS0xNDguNDE4IDAtMjQwLjYxNSAxMDAuMjg3LTI0MC42MTUgMjYwLjExNiAwIDE1MC4wNTkgOTQuMzIxIDI1MS44ODQgMjM0LjY5NyAyNTEuODg0eiIvPjwvZz48L3N2Zz4=" />
                 
                </a>
            </li>
            <li class="nav-item">
                <a href="user_management.php" class="nav-link">
                    <span class="link-text">Client User<br/>Management</span>
                    <img class="y" src="user.svg" />
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="link-text">Skin<br/>Sales</span>
                    <img class="c" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNDgwIDQ4MCIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCA0ODAgNDgwIiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im00NzQuMTMgMTc0LjI5LTIzMi02NGMtMS43Mi0uNDgtMy41NC0uMzYtNS4xOS4zMmwtMjMyIDk2Yy0yLjk5IDEuMjQtNC45NCA0LjE1LTQuOTQgNy4zOXYxMDJjMCA0LjQxOCAzLjU4MiA4IDggOCAzLjg4MiAwIDcuMDQ5LTMuMTY0IDYuOTg0LTcuMDQ0LS42NDgtMzguMzY1IDMwLjYyMi03MC45NTYgNzAuMDE2LTcwLjk1NiAzOS44ODQgMCA3MC42MTUgMzMuMDQ4IDcwLjAxMiA3MC45NTQtLjA2MiAzLjg4MiAzLjEwMSA3LjA0NiA2Ljk4MyA3LjA0NmgxNDYuMDA3YzMuODgyIDAgNy4wNDctMy4xNjQgNi45ODQtNy4wNDUtLjYyLTM4LjA5NSAzMC4zNDQtNzAuOTU1IDcwLjAxNC03MC45NTUgMzkuNjI4IDAgNzAuNjQgMzIuODEzIDcwLjAxNCA3MC45NTUtLjA2NCAzLjg4MSAzLjEwMiA3LjA0NSA2Ljk4NCA3LjA0NWgxMC4wMDJjNC40MTggMCA4LTMuNTgyIDgtOHYtMTM0YzAtMy42LTIuNC02Ljc1LTUuODctNy43MXptLTEyNC4xMyA0OS43MWMwIDQuNDE4LTMuNTgyIDgtOCA4aC0yNTdjLTguNjI4IDAtMTEuMTA3LTExLjg2My0zLjIxNC0xNS4zMjZsMTU1LTY4YzEuNzI2LS43NTcgMy42NjMtLjg4IDUuNDcxLS4zNDlsMTAyIDMwYzMuNDA1IDEuMDAxIDUuNzQzIDQuMTI2IDUuNzQzIDcuNjc1em0tMjExIDkyYzAgMjkuNzgtMjQuMjIgNTQtNTQgNTRzLTU0LTI0LjIyLTU0LTU0IDI0LjIyLTU0IDU0LTU0IDU0IDI0LjIyIDU0IDU0em0zMDAgMGMwIDI5Ljc4LTI0LjIyIDU0LTU0IDU0cy01NC0yNC4yMi01NC01NCAyNC4yMi01NCA1NC01NCA1NCAyNC4yMiA1NCA1NHoiLz48L3N2Zz4=" />
                </a>
            </li>
          
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="link-text">Case<br/>Sales</span>
                    <img class="r" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMXB0IiB2aWV3Qm94PSIxIC0xNjAgNTExLjk5OSA1MTEiIHdpZHRoPSI1MTFwdCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNDk4LjU0Mjk2OSA4MC45NjQ4NDRjLTI4LjY5NTMxMy0yMC4xMjg5MDYtNjkuMjY5NTMxLTI0LjM1MTU2My05OC4yNTM5MDctMjQuMzUxNTYzaC02LjM1MTU2MmwtMTAxLjAwNzgxMi00Ny4xMzY3MTljLTEyLjU4MjAzMi01Ljg3NS0yNi41NzQyMTktOC45NzY1NjItNDAuNDU3MDMyLTguOTc2NTYyaC04OS4xNjQwNjJjLTguNjY0MDYzIDAtMTcuMDkzNzUgMS43MzA0NjktMjUuMDU4NTk0IDUuMTQwNjI1bC05Mi41NjY0MDYgMzkuNjcxODc1Yy01LjA4MjAzMiAyLjE3OTY4OC0xMC40NjA5MzggMy4yODUxNTYtMTUuOTkyMTg4IDMuMjg1MTU2aC02LjE2MDE1NmMtMTIuOTcyNjU2LS4wMDM5MDYtMjMuNTMxMjUgMTAuNTU0Njg4LTIzLjUzMTI1IDIzLjUzMTI1djUwLjkxNDA2M2MwIDExLjIzODI4MSA4LjAwNzgxMiAyMC45NTMxMjUgMTkuMDM5MDYyIDIzLjA5NzY1NmwyOS42Nzk2ODggNS43NzM0MzdjMy42Njc5NjkgMjIuNjE3MTg4IDIzLjMyNDIxOSAzOS45NDE0MDcgNDYuOTU3MDMxIDM5Ljk0MTQwNyAxNy42Nzk2ODggMCAzMy4xMjUtOS42OTkyMTkgNDEuMzI4MTI1LTI0LjA1MDc4MWgyNTQuMDIzNDM4YzguMjAzMTI1IDE0LjM1MTU2MiAyMy42NDg0MzcgMjQuMDUwNzgxIDQxLjMyODEyNSAyNC4wNTA3ODEgMTcuNjc1NzgxIDAgMzMuMTI1LTkuNjk5MjE5IDQxLjMyODEyNS0yNC4wNTA3ODFoMTQuNzg1MTU2YzEyLjk3MjY1NiAwIDIzLjUzMTI1LTEwLjU1NDY4OCAyMy41MzEyNS0yMy41MzEyNXYtMzcuNDQxNDA3YzAtMTAuMjg1MTU2LTUuMDMxMjUtMTkuOTU3MDMxLTEzLjQ1NzAzMS0yNS44NjcxODd6bS0yMTEuOTU3MDMxLTU3Ljg5NDUzMiA3MS44ODI4MTIgMzMuNTQyOTY5aC0xMDcuMDM1MTU2bC0zNS4yNDIxODgtNDEuMTEzMjgxaDM2LjI3NzM0NGMxMS43MTA5MzggMCAyMy41MDc4MTIgMi42MTcxODggMzQuMTE3MTg4IDcuNTcwMzEyem0tOTAuMTQ4NDM4LTcuNTcwMzEyIDM1LjI0MjE4OCA0MS4xMTMyODFoLTEyLjcxNDg0NGMtNC44MzU5MzggMC05LjQxNzk2OS0yLjEwNTQ2OS0xMi41NjY0MDYtNS43ODEyNWwtMzAuMjg1MTU3LTM1LjMzMjAzMXptLTUzLjk2MDkzOCAxMzcuMzA0Njg4Yy41MDM5MDctMi43Njk1MzIuNzgxMjUtNS42MTcxODguNzgxMjUtOC41MzEyNSAwLTMuMTk1MzEzLS4zMjAzMTItNi4zOTQ1MzItLjk1MzEyNC05LjUwNzgxMy0uODI0MjE5LTQuMDU4NTk0LTQuNzgxMjUtNi42Nzk2ODctOC44Mzk4NDQtNS44NTkzNzUtNC4wNjI1LjgyNDIxOS02LjY4MzU5NCA0Ljc4NTE1Ni01Ljg1OTM3NSA4Ljg0Mzc1LjQzMzU5MyAyLjEyODkwNi42NTIzNDMgNC4zMjQyMTkuNjUyMzQzIDYuNTIzNDM4IDAgMTcuOTY0ODQzLTE0LjYxNzE4NyAzMi41NzgxMjQtMzIuNTgyMDMxIDMyLjU3ODEyNC0xNy45NjQ4NDMgMC0zMi41NzgxMjUtMTQuNjEzMjgxLTMyLjU3ODEyNS0zMi41NzgxMjQgMC0xNy45NjQ4NDQgMTQuNjEzMjgyLTMyLjU4MjAzMiAzMi41NzgxMjUtMzIuNTgyMDMyIDQuNTUwNzgxIDAgOC45NDUzMTMuOTE3OTY5IDEzLjA3MDMxMyAyLjcyNjU2MyAzLjc4OTA2MiAxLjY2MDE1NiA4LjIxNDg0NC0uMDY2NDA3IDkuODc4OTA2LTMuODU5Mzc1IDEuNjY0MDYyLTMuNzkyOTY5LS4wNjI1LTguMjE0ODQ0LTMuODU1NDY5LTkuODc4OTA2LTYuMDM1MTU2LTIuNjQ0NTMyLTEyLjQ2MDkzNy0zLjk4ODI4Mi0xOS4wOTM3NS0zLjk4ODI4Mi0yMy42MzI4MTIgMC00My4yODkwNjIgMTcuMzI0MjE5LTQ2Ljk1NzAzMSAzOS45NDE0MDZsLTI2LjgxNjQwNi01LjIxNDg0M2MtNC0uNzc3MzQ0LTYuOTA2MjUtNC4zMDA3ODEtNi45MDYyNS04LjM3NXYtMjcuMzgyODEzaDguNTM1MTU2YzQuMTQwNjI1IDAgNy41LTMuMzU5Mzc1IDcuNS03LjVzLTMuMzU5Mzc1LTcuNS03LjUtNy41aC04LjUzMTI1di04LjUzMTI1YzAtNC43MDcwMzEgMy44MjgxMjUtOC41MzEyNSA4LjUzMTI1LTguNTMxMjVoNi4xNjAxNTZjNy41NzQyMTkgMCAxNC45NDE0MDYtMS41MTU2MjUgMjEuOTAyMzQ0LTQuNDk2MDk0bDkyLjU2MjUtMzkuNjcxODc0YzQuMDU4NTk0LTEuNzM4MjgyIDguMjczNDM4LTIuODkwNjI2IDEyLjU4OTg0NC0zLjQ3NjU2M2wzOC4yNjU2MjUgNDQuNjQwNjI1YzYgNy4wMDM5MDYgMTQuNzMwNDY5IDExLjAxOTUzMSAyMy45NTMxMjUgMTEuMDE5NTMxaDE4MS4zMjQyMThjMjAuMDQyOTY5IDAgNTUuODA0Njg4IDIuMzQ3NjU3IDgyLjMwMDc4MiAxNy4wNjI1aC0yLjEzNjcxOWMtNC4xNDQ1MzEgMC03LjUgMy4zNTkzNzUtNy41IDcuNSAwIDQuMTQ0NTMxIDMuMzU1NDY5IDcuNSA3LjUgNy41aDE2LjIzODI4MWMuMTk5MjE5IDEuMDMxMjUuMzA4NTk0IDIuMDg1OTM4LjMwODU5NCAzLjE1NjI1djEzLjkxMDE1N2gtMjMuMzE2NDA2Yy04LjIwMzEyNS0xNC4zNTE1NjMtMjMuNjQ4NDM4LTI0LjA0Njg3Ni00MS4zMjgxMjUtMjQuMDQ2ODc2LTE3LjY3OTY4OCAwLTMzLjEyNSA5LjY5NTMxMy00MS4zMjgxMjUgMjQuMDQ2ODc2aC0xNC43ODEyNWMtNC4xNDQ1MzIgMC03LjUgMy4zNTU0NjgtNy41IDcuNSAwIDQuMTQwNjI0IDMuMzU1NDY4IDcuNSA3LjUgNy41aDkuMzA4NTk0Yy0uNTAzOTA3IDIuNzY5NTMxLS43ODEyNSA1LjYxNzE4Ny0uNzgxMjUgOC41MzEyNSAwIDIuOTE0MDYyLjI3NzM0MyA1Ljc2MTcxOC43ODEyNSA4LjUzMTI1em0yODkuODc4OTA3IDI0LjA0Njg3NGMtMTcuOTY0ODQ0IDAtMzIuNTgyMDMxLTE0LjYxMzI4MS0zMi41ODIwMzEtMzIuNTc4MTI0IDAtMTcuOTY0ODQ0IDE0LjYxNzE4Ny0zMi41ODIwMzIgMzIuNTgyMDMxLTMyLjU4MjAzMiAxNy45NjQ4NDMgMCAzMi41ODIwMzEgMTQuNjE3MTg4IDMyLjU4MjAzMSAzMi41ODIwMzIgMCAxNy45NjQ4NDMtMTQuNjE3MTg4IDMyLjU3ODEyNC0zMi41ODIwMzEgMzIuNTc4MTI0em01Ni4xMTMyODEtMjQuMDQ2ODc0aC05LjMxMjVjLjUwMzkwNi0yLjc2OTUzMi43ODEyNS01LjYxNzE4OC43ODEyNS04LjUzMTI1IDAtMi45MTQwNjMtLjI3NzM0NC01Ljc2MTcxOS0uNzgxMjUtOC41MzEyNWgxNy44NDM3NXY4LjUzMTI1YzAgNC43MDMxMjQtMy44MjgxMjUgOC41MzEyNS04LjUzMTI1IDguNTMxMjV6bTAgMCIvPjxwYXRoIGQ9Im0zNDQuMTc5Njg4IDEyMC43NDIxODhoLTEwMC40NjA5MzhsLTE2Ljk4ODI4MS0yMi42NTIzNDRjLTQuNDIxODc1LTUuODk0NTMyLTExLjQ2MDkzOC05LjQxNDA2My0xOC44MjgxMjUtOS40MTQwNjNoLTMyLjA2MjVjLTIuODQzNzUgMC01LjQzNzUgMS42MDU0NjktNi43MDcwMzIgNC4xNDg0MzgtMS4yNzM0MzcgMi41MzkwNjItMSA1LjU4MjAzMS43MDcwMzIgNy44NTE1NjJsMTkuMjM4MjgxIDI1LjY1MjM0NGM0LjQxNzk2OSA1Ljg5NDUzMSAxMS40NTcwMzEgOS40MTQwNjMgMTguODI0MjE5IDkuNDE0MDYzaDEzNi4yNzczNDRjNC4xNDA2MjQgMCA3LjUtMy4zNTkzNzYgNy41LTcuNSAwLTQuMTQ0NTMyLTMuMzU5Mzc2LTcuNS03LjUtNy41em0tMTM2LjI3NzM0NCAwYy0yLjY3MTg3NSAwLTUuMjIyNjU2LTEuMjc3MzQ0LTYuODI0MjE5LTMuNDE0MDYzbC0xMC4yMzgyODEtMTMuNjUyMzQ0aDE3LjA2MjVjMi42NzE4NzUgMCA1LjIyMjY1NiAxLjI3NzM0NCA2LjgyODEyNSAzLjQxNDA2M2wxMC4yMzgyODEgMTMuNjUyMzQ0em0wIDAiLz48cGF0aCBkPSJtOTUuNjc1NzgxIDEyOC43NTc4MTJjLTguNTU0Njg3IDAtMTUuNTE1NjI1IDYuOTYwOTM4LTE1LjUxNTYyNSAxNS41MTU2MjYgMCA4LjU1NDY4NyA2Ljk2MDkzOCAxNS41MTU2MjQgMTUuNTE1NjI1IDE1LjUxNTYyNCA4LjU1ODU5NCAwIDE1LjUxNTYyNS02Ljk2MDkzNyAxNS41MTU2MjUtMTUuNTE1NjI0IDAtOC41NTQ2ODgtNi45NTcwMzEtMTUuNTE1NjI2LTE1LjUxNTYyNS0xNS41MTU2MjZ6bTAgMCIvPjxwYXRoIGQ9Im00MzIuMzU1NDY5IDEyOC43NTc4MTJjLTguNTU0Njg4IDAtMTUuNTE1NjI1IDYuOTYwOTM4LTE1LjUxNTYyNSAxNS41MTU2MjYgMCA4LjU1NDY4NyA2Ljk2MDkzNyAxNS41MTU2MjQgMTUuNTE1NjI1IDE1LjUxNTYyNCA4LjU1NDY4NyAwIDE1LjUxNTYyNS02Ljk2MDkzNyAxNS41MTU2MjUtMTUuNTE1NjI0IDAtOC41NTQ2ODgtNi45NjA5MzgtMTUuNTE1NjI2LTE1LjUxNTYyNS0xNS41MTU2MjZ6bTAgMCIvPjwvc3ZnPg==" />
                </a>
            </li> -->
            <li class="nav-item">
                <a href="c_user_management.php" class="nav-link">
                    <span class="link-text">Admin User<br/>Management</span>
                    <img class="y" src="user.svg" />
                </a>
            </li>
            <li class="nav-item">
                <a href="cat_management.php" class="nav-link">
                    <span class="link-text">Category<br/>Management</span>
                    <img class="y" src="group.svg">
                </a>
            </li>
            <li class="nav-item">
                <a href="phone_management.php" class="nav-link">
                    <span class="link-text">Phone<br/>Management</span>
                    <img class="y" src="phon.svg">
                </a>
            </li>
            <li class="nav-item">
                <a href="orders_management.php" class="nav-link">
                    <span class="link-text">Order<br/>Management</span>
                    <img class="y" src="orders.svg">
                </a>
            </li>
            <li class="nav-item">
                <a href="logout.php" id="logaut" class="nav-link">
                    <span class="link-text">Log Out</span>
                    <img class="y" src="logout.svg" />
                </a>
            </li>
            
        </ul>
    </nav>
 