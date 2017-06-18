<?php
namespace Observer;

interface Observer
{
    function update($event_info = null);
}