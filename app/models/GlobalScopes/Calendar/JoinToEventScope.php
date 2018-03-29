<?php



use Illuminate\Database\Query\Builder as BaseBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ScopeInterface;

class JoinToEventScope implements ScopeInterface
{

    public function apply(Builder $builder) {
        $builder->select(
            'calendar.id as calendarId',
                'event.id as eventId',
                'calendar.userId as userId',
                'event.beginTime as beginTime',
                'event.endTime as endTime',
                'event.title as title',
                'event.createdBy as createdByUserId',
                'event.description as description',
                'event.location as location',
                'event.allDay as allDay',
                'event.countdownBegin as countdownBegin',
                'event.countdownEnd as countdownEnd'
        )->join('event','calendar.eventId','=','event.id');
        //$builder->where('userId','=',Auth::user()->id);
    }
    public function remove(Builder $builder) {
//        $query = $builder->getQuery();
//        foreach((array)$query->wheres as $key => $where) {
//
//            if($where['column'] == 'userId') {
//
//                unset($query->wheres[$key]);
//
//                $query->wheres = array_values($query->wheres);
//
//            }
//        }
    }
//    public function removeWhere(BaseBuilder $query,$key) {
//
//    }
//    public function removeBinding(BaseBuilder $query,$key) {
//
//    }
}