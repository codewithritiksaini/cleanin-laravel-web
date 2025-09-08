<?php

if (!function_exists('renderTestimonialRating')) {
    function renderTestimonialRating($rating)
    {
        $fullStars = floor($rating);
        $halfStar = ($rating - $fullStars) >= 0.5;
        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);

        $starsHtml = '';

        // Full stars
        for ($i = 0; $i < $fullStars; $i++) {
            $starsHtml .= '<i class="fas fa-star text-warning"></i>';
        }

        // Half star
        if ($halfStar) {
            $starsHtml .= '<i class="fas fa-star-half-alt text-warning"></i>';
        }

        // Empty stars
        for ($i = 0; $i < $emptyStars; $i++) {
            $starsHtml .= '<i class="far fa-star text-warning"></i>';
        }

        return $starsHtml;
    }
}
