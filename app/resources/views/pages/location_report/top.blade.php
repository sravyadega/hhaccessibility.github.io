	<div class="title">
		@if (isset($question_category_id))
			<h1><a href="/location-report/{{ $location->id }}/{{ $rating_system }}">{{ $location->name }}</a></h1>
		@else
			<h1>{{ $location->name }}</h1>
		@endif
		<div class="universal-personal">
			<a class="{{ $rating_system === 'universal' ? 'selected' : '' }}"
				href="/location-report/{{ $location->id }}/universal{{
					isset($question_category_id) 
					? '/'.$question_category_id
					: ''
				}}">Universal</a>
			<a class="{{ $rating_system === 'personal' ? 'selected' : '' }}"
			href="/location-report/{{ $location->id }}/personal{{
					isset($question_category_id) 
					? '/'.$question_category_id
					: ''
				}}">Personal</a>
		</div>
	</div>
