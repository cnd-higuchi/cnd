<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Robbo\Presenter\Presenter;
use Robbo\Presenter\Presentableinterface;

class TimeCard extends Model implements PresentableInterface
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'time_cards';

    protected $dates = ['bgn_time', 'end_time', 'bgn_stamp_time', 'end_stamp_time'];

    public function getPresenter()
    {
	    return new TimeCardPresenter($this);
    }
}

class TimeCardPresenter extends Presenter
{
	public function formatBgnTime($mode='date')
	{
		if ($mode == 'time') {
			return $this->bgn_time->format('G:i');
		} else {
			return $this->bgn_time->format('Y/n/j');
		}
	}
	public function formatEndTime($mode='date')
	{
		if ($mode == 'time') {
			return $this->end_time->format('G:i');
		} else {
			return $this->end_time->format('Y/n/j');
		}
	}
	public function formatBgnStampTime($mode='date')
	{
		if ($mode == 'time') {
			return $this->bgn_stamp_time->format('G:i');
		} else {
			return $this->bgn_stamp_time->format('Y/n/j');
		}
	}
	public function formatEndStampTime($mode='date')
	{
		if ($mode == 'time') {
			return $this->end_stamp_time->format('G:i');
		} else {
			return $this->end_stamp_time->format('Y/n/j');
		}
	}
}
