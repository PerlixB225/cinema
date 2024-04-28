<!-- Movieid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('movieid', 'Movieid:') !!}
    {!! Form::number('movieid', $movieid, ['class' => 'form-control', 'readonly' => 'true']) !!}
</div>

<!-- Rating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating', 'Rating:') !!}
    {!! Form::number('rating', null, ['class' => 'form-control', 'min' => 0, 'max' => 5, 'step' => 1, 'id' => 'fieldRating']) !!}
    <div class="rating-stars"></div>
</div>

<!-- Comment Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comment', 'Comment:') !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>

<style>
    .rating-stars {
        font-size: 0;
        display: flex;
    }
    .rating-stars label {
        display: inline-block;
        width: 25px;
        height: 25px;
        margin: 0;
        padding: 0;
        font-size: 25px;
        line-height: 25px;
        text-align: center;
        cursor: pointer;
    }
    .rating-stars label:before {
        content: '\2605';
    }
    .rating-stars label.checked:before,
    .rating-stars label:hover:before {
        color: gold;
    }
</style>

<script>
    // JavaScript for handling the rating input
    document.addEventListener('DOMContentLoaded', function () {
        const fieldRating = document.getElementById('fieldRating');
        const ratingStars = document.querySelector('.rating-stars');
        const stars = [];

        // Create star elements
        for (let i = 1; i <= 5; i++) {
            const star = document.createElement('label');
            star.setAttribute('for', `star${i}`);
            star.addEventListener('mouseover', handleStarHover);
            star.addEventListener('mouseout', handleStarHoverOut);
            stars.push(star);
        }

        // Append stars to ratingStars div
        stars.forEach(star => {
            ratingStars.appendChild(star);
        });

        // Event listener to update stars based on rating input
        fieldRating.addEventListener('input', function () {
            const rating = parseInt(this.value);
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.add('checked');
                } else {
                    star.classList.remove('checked');
                }
            });
        });

        // Event handler for star hover
        function handleStarHover(event) {
            const hoveredStar = event.target;
            const hoveredIndex = stars.indexOf(hoveredStar);
            stars.forEach((star, index) => {
                if (index <= hoveredIndex) {
                    star.classList.add('checked');
                } else {
                    star.classList.remove('checked');
                }
            });
        }

        // Event handler for mouseout of stars
        function handleStarHoverOut() {
            const currentRating = parseInt(fieldRating.value);
            stars.forEach((star, index) => {
                if (index < currentRating) {
                    star.classList.add('checked');
                } else {
                    star.classList.remove('checked');
                }
            });
        }
    });
</script>
