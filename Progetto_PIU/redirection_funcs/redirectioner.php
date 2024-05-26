<?php
function redirect_toLogin()
{
    header("Location: login.php");
    exit();
}

function redirect_toPatientPage(int $patient_id)
{
    header("Location: patient.php?id=" + $patient_id);
    exit();
}
