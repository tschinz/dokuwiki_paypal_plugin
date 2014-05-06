# Dokuwiki Plugin PayPal

<table>
  <tr>
    <th align="left">Description</th>
    <td>The PayPal plugin let you add an donation button easily</td>
  </tr>
  <tr>
    <th align="left">Author</th>
    <td>Zahno Silvan</td>
  </tr>
  <tr>
    <th align="left">Email</th>
    <td>zaswiki@gmail.com</td>
  </tr>
  <tr>
    <th align="left">Type</th>
    <td>syntax</td>
  </tr>
  <tr>
    <th align="left">Lastupdate</th>
    <td>2011-02-17</td>
  </tr>
  <tr>
    <th align="left">Tags</th>
    <td>paypal, donation, embed, button</td>
  </tr>
</table>

## Download
* Download to Dokuwiki plugin folder
* File     : https://github.com/tschinz/dokuwiki_paypal_plugin/zipball/master

## Versions
* **2011-02-17**
  * Init version 
* **2012-10-22**
  * Moved repo to GitHub

## Syntax
```
{{paypal>encrypted-button-value-from-paypal}}
```

You can get your encrypted button value here: [PayPal Donation Button](https://www.paypal.com/us/cgi-bin/?cmd=_donate-intro-outside)

"Encrypted button value" should look something like this:
<code>
-----BEGIN PKCS7-----MIIHFgYJKoZIhvcNAQcEoIIHBzCCBwMCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYCR5s3EOHplNACgO/jwtmbS8rsPTwbk9QF/gDO4QOjextCL1IYgWfhtk2TcgJ70OQ/EqLKyJDDbfBs1VQPpcfR0ceJq7+OnOTWsxopdtFpScjDbOt2A9hfzSHleisS7BuD2DDeQcgwOzBVvF2QtvI4S+z3zpgx6bcesZVXDVRB8PTELMAkGBSsOAwIaBQAwgZMGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQIbY8ak8S072mAcOUHMZWsYcugVPDBcFU1qZklyuyo6NWJNOuy7HVUJ0DuhWMYYGu5QyK3dmXV9XRqqn8CDteSHL9iOQ3mY4EAM28dUZ7DW876xqnByaClMlD8K7H1iYkTv9+M5uGFGMPFr1NzthW6lkDQZgHjkDnedZygggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0xMTAxMjUxMjMyMzVaMCMGCSqGSIb3DQEJBDEWBBRGobOh6lF7zK0TSQo0O+QhMknIBjANBgkqhkiG9w0BAQEFAASBgAX443Lb6H6REgIXd1ZyEqfw7y7WL2Q6YdPRHXSV7PWRGyClWHpnIUy1j/NIVTldZwUTq8GMVWqc11r/opyN9ehhBU6dyejBy+E+iEPT51R4vre3/zexRei4yOfmW2msQjiSvrr62Jmo8fY/1BD8LCmMBQjC6DYhFoSiEyu1dYCd-----END PKCS7-----
</code>

## Documentation

All documentation for the Paypal Plugin is available online at:

  * [Dokuwiki Plugin Page](http://dokuwiki.org/plugin:paypal)
  * [ZaWiki Plugin Page](http://zawiki.zapto.org/doku.php/tschinz:dw_paypal)
  * [Github Project Page](https://github.com/tschinz/dokuwiki_paypal_plugin)

2011 by Zahno Silvan <zaswiki@gmail.com>
