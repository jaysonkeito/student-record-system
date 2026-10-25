<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-0">Students</h1>
    <a href="<?= site_url('students/create') ?>" class="btn btn-primary">+ Add Student</a>
</div>

<?php if (empty($students)): ?>

    <div class="alert alert-info">
        No student records yet.
        <a href="<?= site_url('students/create') ?>" class="btn btn-sm btn-primary ms-2">Add Student</a>
    </div>

<?php else: ?>

    <div class="table-responsive">
        <table class="table table-bordered table-striped bg-white align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Student Number</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th class="text-nowrap">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>Jayson Francisco</td>
                    <td>jayson@gmail.com</td>
                    <td>BSIT</td>
                    <td class="text-nowrap">
                        <!-- Add Edit and Delete buttons here -->
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Kylle Ian Acibron</td>
                    <td>kylle@gmail.com</td>
                    <td>BSIT</td>
                    <td class="text-nowrap">
                        <!-- Add Edit and Delete buttons here -->
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Klyde Castro</td>
                    <td>klyde@gmail.com</td>
                    <td>BSIT</td>
                    <td class="text-nowrap">
                        <!-- Add Edit and Delete buttons here -->
                    </td>
                </tr>
            </tbody>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= esc($student['student_number']) ?></td>
                        <td><?= esc($student['full_name']) ?></td>
                        <td><?= esc($student['email']) ?></td>
                        <td><?= esc($student['course']) ?></td>
                        <td class="text-nowrap">
                            <a href="<?= site_url('students/' . $student['id']) ?>" class="btn btn-sm btn-info">View</a>
                            <a href="<?= site_url('students/' . $student['id'] . '/edit') ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form method="post" action="<?= site_url('students/' . $student['id'] . '/delete') ?>"
                                  class="d-inline" onsubmit="return confirm('Delete this student?')">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?= $pager->links('default', 'bootstrap') ?>

<?php endif; ?>

<?= $this->endSection() ?>
