<?php

namespace App;
use Eloquent;

class QuestionCategory extends Eloquent
{
    protected $fillable = [
        'id', 'name',
    ];
	
	protected $table = 'question_category';
	
	public function getAccessibilityRating($location_id, $ratingSystem)
	{
		$questions = $this->questions()->get();
		$sum = 0;
		$totalCount = 0;
		foreach ($questions as $question)
		{
			$individualRating = $question->getAccessibilityRating($location_id, $ratingSystem);
			$sum = $sum + $individualRating;
			$totalCount ++;
		}
		if ($totalCount === 0)
			return 0;
		
		return round($sum / $totalCount);
	}
	
    public function questions()
    {
        return $this->hasMany('App\Question');
    }	

	public function comments()
	{
		return $this->hasMany('App\ReviewComment');
	}
}
