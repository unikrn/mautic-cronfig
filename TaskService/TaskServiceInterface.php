<?php
/*
 * @package     Cronfig Mautic Bundle
 * @copyright   2019 Cronfig.io. All rights reserved
 * @author      Jan Linhart
 * @link        http://cronfig.io
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\CronfigBundle\TaskService;

use MauticPlugin\CronfigBundle\Collection\TaskCollection;
use MauticPlugin\CronfigBundle\Api\DTO\Task;

interface TaskServiceInterface
{
    public function getCommand(): string;

    public function needsBackgroundJob(): bool;

    /**
     * Finds all matching Cronfig tasks that are triggering this particular Mautic task.
     *
     * @param TaskCollection $allTasks
     *
     * @return TaskCollection
     */
    public function findMatchingTasks(TaskCollection $allTasks): TaskCollection;

    public function setTasks(TaskCollection $tasks): void;

    public function getTasks(): TaskCollection;

    public function buildNewTask(): Task;
}
