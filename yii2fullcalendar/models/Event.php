<?php

namespace yii2fullcalendar\models;

use yii\base\Model;

class MessagesSearch extends Model
{

  /**
   * Detailed description off all fields can be found here
   * @url http://arshaw.com/fullcalendar/docs/event_data/Event_Object/
   */
  
  public $id;
  public $title;
  public $allDay;
  public $start;
  public $end;
  public $url;
  public $className;
  public $editable;
  public $startEditable;
  public $durationEditable;
  public $source;
  public $color;
  public $backgroundColor;
  public $borderColor;
  public $textColor;

  public function rules()
  {
    return [
      ['id', 'integer'],
      ['title, allDay, start, end, url, className, source, color, backgroundColor, borderColor, textColor', 'safe'],
      ['editable, startEditable, durationEditable', 'boolean'],
    ];
  }

}
