<?php
require_once dirname(__FILE__).'/omise-php/lib/Omise.php';

header('Content-Type: application/json');

define('OMISE_PUBLIC_KEY', 'PUBLIC_KEY');
define('OMISE_SECRET_KEY', 'SECRET_KEY');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $token = $_POST['omiseToken'] ?? null;
  $source = $_POST['omiseSource'] ?? null;
  $amount = $_POST['amount'] ?? null;

  if (!$amount || !is_numeric($amount)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid amount']);
    exit;
  }

  if ($token || $source) {
    try {
      $charge = OmiseCharge::create([
        'amount' => intval($amount),
        'currency' => 'THB',
        'card' => $token,
        'source' => $source
      ]);

      if ($charge['status'] === 'successful') {
        echo json_encode(['status' => 'success', 'message' => 'Payment Successful!']);
      } else {
        echo json_encode(['status' => 'error', 'message' => 'Payment Failed: ' . htmlspecialchars($charge['failure_message'])]);
      }
    } catch (Exception $e) {
      echo json_encode(['status' => 'error', 'message' => 'Charge error: ' . $e->getMessage()]);
    }
  } else {
    echo json_encode(['status' => 'error', 'message' => 'No token or source']);
  }
} else {
  echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
