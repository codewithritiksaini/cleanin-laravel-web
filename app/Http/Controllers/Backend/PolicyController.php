<?php

namespace App\Http\Controllers\Backend;

use App\Models\Policy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PolicyController extends Controller
{
    // Terms & Conditions
    public function terms()
    {
        $policy = Policy::first();
        return view('admin.policies.terms', [
            'active' => 'terms',
            'terms' => $policy->term ?? '',
        ]);
    }

    public function termsUpdate(Request $request)
    {
        $request->validate(['content' => 'required']);

        $policy = Policy::first();
        $policy->term = $request->content;
        $policy->save();

        return response()->json([
            'status' => 1,
            'message' => "Success! Terms & Conditions have been updated successfully.",
        ]);
    }

    // Privacy Policy
    public function policy()
    {
        $policy = Policy::first();
        return view('admin.policies.policy', [
            'active' => 'policy',
            'policy' => $policy->policy ?? '',
        ]);
    }

    public function policyUpdate(Request $request)
    {
        $request->validate(['content' => 'required']);

        $policy = Policy::first();
        $policy->policy = $request->content;
        $policy->save();

        return response()->json([
            'status' => 1,
            'message' => "Success! Privacy Policy has been updated successfully.",
        ]);
    }

    // Refund Policy
    public function refund()
    {
        $policy = Policy::first();
        return view('admin.policies.refund', [
            'active' => 'refund',
            'refund' => $policy->refund ?? '',
        ]);
    }

    public function refundUpdate(Request $request)
    {
        $request->validate(['content' => 'required']);

        $policy = Policy::first();
        $policy->refund = $request->content;
        $policy->save();

        return response()->json([
            'status' => 1,
            'message' => "Success! Refund Policy has been updated successfully.",
        ]);
    }
}
