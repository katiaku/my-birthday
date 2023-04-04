<?php
namespace App\View\Helper;

use Cake\View\Helper;

class IsActiveHelper extends Helper
{
    public function isActiveBadge($is_active)
    {
        return (
            $is_active ?
            '<span class="badge bg-success">Active</span>'
            :
            '<span class="badge bg-danger">Inactive</span>'
        );
    }
}
