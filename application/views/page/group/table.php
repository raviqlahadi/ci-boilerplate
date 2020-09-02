<?php if ($this->session->flashdata('alert') !== null) echo $this->session->flashdata('alert') ?>
<table class="table table-responsive-sm table-striped table-borderless">
    <thead>
        <tr>
            <?php
            echo "<th>No</th>";
            foreach ($table_head as $key => $value) {
                echo "<th>" . ucfirst($value) .  "</th>";
            }
            echo "<th>Action</th>";

            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($table_content as $key => $value) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            foreach ($table_head as $key_head => $value_head) {
                echo "<td>" . $value->{$value_head} .  "</td>";
            }
            echo "<td>".$this->table_template->action_dropdown($page_url, $value->id)."</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </tbody>
</table>