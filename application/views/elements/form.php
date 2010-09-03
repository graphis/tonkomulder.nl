<?php defined('APPPATH') or die('No direct script access.');  

if (is_array($last_input) AND ! empty($last_input))
{
    $input = array();
    foreach ($last_input as $var=>$val)
    {
        if ($val)
        {
            $input[] = 'Variable <i>'.$var.'</i> equals: '.$val;    
        }
           
    }
    
    $input = implode('<br />', $input);
    
    echo '<div style="width: 200pt; border-style: solid dotted; border-color: #00ff00;">'.$input.'</div>';         
}

if (is_array($errors) AND ! empty($errors))
{
    $input_err = array();
    foreach ($errors as $field=>$val)
    {
        $input_err[] = 'Error in field <i>'.$field.'</i> as: '.$val[0];        
    }
    $input_err = implode('<br />', $input_err);
    
    echo '<div style="width: 200pt; border-style: solid dotted; border-color: #ff0000;">'.$input_err.'</div>';         
}

echo 'Write something please:<br />';

echo Form::open();

echo '<div>'.Form::hidden('hidden','form_sent').'</div>';
echo '<div>'.Form::input('text').'</div>';
echo '<div>'.Form::password('pass').'</div>';
echo '<div>'.Form::textarea('area').'</div>';


echo '<div>'.Form::label('chck[0]','item 1');
echo Form::checkbox('chck[0]','1').'<br />';
echo Form::label('chck[1]','item 2');
echo Form::checkbox('chck[1]','2').'</div>';


echo '<div>'.Form::label('radio','Choose:');
echo '<br />';
echo 'A'.Form::radio('radio','A');
echo ' or B'.Form::radio('radio','B').'</div>';

$opts = array (1=>'car', 2=> 'toy', 3=>'ball');
echo Form::select('sel',$opts).'<br />';

echo Form::submit('submit','Send');

echo Form::close();
