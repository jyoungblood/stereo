<!DOCTYPE html>
<html style="height: 100%;">
<head>
  <title>{{ $title }}</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="height: 100%; letter-spacing: 0.015rem; font-family: -apple-system,BlinkMacSystemFont,avenir next,avenir,helvetica neue,helvetica,ubuntu,roboto,noto,segoe ui,arial,sans-serif;">

@if ($error_detail)

  <div style="padding: 1rem; line-height: 1.5; font-size: .75rem;">
    <div style="background-color: #000; color: #fff; padding: 1rem; text-transform: uppercase; margin-bottom: 1rem; font-weight: bold; font-size: 1.25rem;">{{ $error_detail['title'] }}</div>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 1rem;">
      <tr>
        <td style="padding: 5px; border: 1px solid #ccc;"><strong>Type:</strong></td>
        <td style="padding: 5px; border: 1px solid #ccc;">{{ $error_detail['details']['type'] }}</td>
      </tr>
      <tr>
        <td style="padding: 5px; border: 1px solid #ccc;"><strong>Code:</strong></td>
        <td style="padding: 5px; border: 1px solid #ccc;">{{ $error_detail['details']['code'] }}</td>
      </tr>
      <tr>
        <td style="padding: 5px; border: 1px solid #ccc;"><strong>Message:</strong></td>
        <td style="padding: 5px; border: 1px solid #ccc;">{{ $error_detail['details']['message'] }}</td>
      </tr>
      <tr>
        <td style="padding: 5px; border: 1px solid #ccc;"><strong>File:</strong></td>
        <td style="padding: 5px; border: 1px solid #ccc;">{{ $error_detail['details']['file'] }}</td>
      </tr>
      <tr>
        <td style="padding: 5px; border: 1px solid #ccc;"><strong>Line:</strong></td>
        <td style="padding: 5px; border: 1px solid #ccc;">{{ $error_detail['details']['line'] }}</td>
      </tr>
    </table>
    <pre style="background-color: #f0f0f0; color: #666; padding: 0.7rem 0.8rem; border: 1px solid #ccc; overflow-x: auto; font-size: 90%; line-height: 2;">{{ $error_detail['details']['trace'] }}</pre>
  </div>

@else

  <div style="display: table; height: 100%; margin: 0 auto;">
    <div style="display: table-cell; vertical-align: middle;">
      <center>
        <span style="font-weight: bold; font-size: 2rem; display: inline-block; vertical-align: middle; border-right: 2px solid #000; padding-right: 0.75rem; margin-right: 0.35rem;">{{ $status_code }}</span>
        <span style="font-size: 0.85rem; display: inline-block; vertical-align: middle;">{{ $error_message }}</span>
      </center>
    </div>
  </div>

@endif



</body>
</html>