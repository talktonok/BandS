<?php

include("profile_header.php");
$tenant_id = $_GET['tenant'];
if (isset($_GET['value'])) {
    if ($_GET['value'] == '1') {
        $approve = approve($tenant_id);
        if ($approve) {
            header("Location:view_tenants.php?message=approved&house_id=$tenant_id");
        } else {
            die('Not able to approve');
        }
    } else {
        $reject = reject($tenant_id);
        if ($reject) {
            $delete = delete_tenant($tenant_id);
            if ($delete) {
                header("Location:view_tenants.php?message=Tenant Rejected and delete&house_id=$tenant_id");
            } else {
                die(mysqli_error($connection));
            }
        }
    }
}
?>