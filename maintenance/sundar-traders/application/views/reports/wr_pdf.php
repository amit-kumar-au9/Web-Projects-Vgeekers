<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$p = array('admin','accountant','manager');
if(!(in_array($this->session->userdata('type'),$p))){
  redirect('auth/dashboard');
}
?>
                <table border="1">
                   <thead>
                    <tr>
                    <th width="10%"><?php echo $this->lang->line('product_no'); ?></th>
                    <th width="10%"><?php echo $this->lang->line('product_code'); ?></th>
                    <th width="10%"><?php echo $this->lang->line('product_hsn_sac_code'); ?></th>
                    <th width="20%"><?php echo $this->lang->line('product_name'); ?></th>
                    <th width="10"><?php echo $this->lang->line('header_category'); ?></th>
                    <th width=10%><?php echo $this->lang->line('product_cost').'('.$this->session->userdata('symbol').')'; ?></th>
                    <th width=10%><?php echo $this->lang->line('product_price').'('.$this->session->userdata('symbol').')'; ?></th>
                    <th width="10%"><?php echo $this->lang->line('product_quantity'); ?></th>
                    <th width="10%"><?php echo $this->lang->line('product_unit'); ?></th>
                    <!-- <th><?php //echo $this->lang->line('product_action'); ?></th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $i=1;
                      foreach ($data as $row) {
                         $id= $row->product_id;
                    ?>
                    <tr>
                      <td><?= $i++;?></td>
                      <td><?php echo $row->code; ?></td>
                      <td><?php echo $row->hsn_sac_code; ?></td>
                      <td><?php echo $row->name; ?></td>
                      <td><?php echo $row->category_name; ?></td>
                      <td align="right"><?php echo $row->cost;?></td>
                      <td align="right"><?php echo $row->price;?></td>
                      <td><?php echo $row->warehouse_quantity; ?></td>
                      <td><?php echo $row->unit; ?></td>
                      <!-- <td>
                          <a href="" title="View Details" class="btn btn-xs btn-warning"><span class="fa fa-eye"></span></a>&nbsp;&nbsp; 
                          <a href="<?php // echo base_url('product/edit/'); ?><?php // echo $id; ?>" title="Edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;
                          <a href="javascript:delete_id(<?php // echo $id;?>)" title="Delete" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                      </td> -->
                    <?php
                      }
                    ?>
                    </tr>
                  </tbody>
                </table>
<script>
  window.print();
</script>