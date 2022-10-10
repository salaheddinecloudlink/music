<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>UrUploadz Email Template</title>
  </head>
  <body style="margin: 0px; background: #d9f4e7">
    <div
      width="100%"
      style="
        background: #d9f4e7;
        padding: 0px 0px;
        font-family: arial;
        line-height: 28px;
        height: 100%;
        width: 100%;
        color: #514d6a;
      "
    >
      <div
        style="
          max-width: 600px;
          padding: 50px 0;
          margin: 0px auto;
          font-size: 14px;
        "
      >
        <div
          style="background: #fff; box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08)"
        >
          <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
            <tbody>
              <tr style="line-height: 0px">
                <td
                  style="vertical-align: top; padding: 30px 0 0 30px"
                  align="left"
                >
                  <a href="http://eliteadmin.themedesigner.in" target="_blank"
                    ><img
                      src="https://mcusercontent.com/ccbd1216cce51d294e9a2e86f/images/8e66ef22-0655-00cd-3a0d-8fd5c17df4f0.png"
                      alt="Uruploadz"
                      style="border: none"
                    />
                  </a>
                </td>
                <td align="right">
                  <img
                    src="https://mcusercontent.com/ccbd1216cce51d294e9a2e86f/images/72a3064d-cbe8-8a3d-9b30-627b94f81fc5.jpg"
                    alt="Uruploadz"
                    style="border: none"
                  />
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <!--<img
                    src="https://mcusercontent.com/ccbd1216cce51d294e9a2e86f/images/d38b0b11-489f-7257-d01d-f0b542e6016c.jpg"
                    alt="Uruploadz"
                    style="border: none"
                  />-->
                  <img
                    src="https://mcusercontent.com/ccbd1216cce51d294e9a2e86f/images/97f5abef-4c78-79ab-fc55-cc47333b9149.jpg"
                    alt="Uruploadz"
                    style="border: none"
                  />
                  
                </td>
              </tr>
            </tbody>
          </table>
          <table
            border="0"
            cellpadding="0"
            cellspacing="0"
            style="width: 100%; padding: 30px"
          >
            <tbody style="background-color: #f7f7f7">
              <tr>
                <td style="padding: 25px; font-size: 18px">
                  <b>Hello Sir/Madam/Customer,</b>
                  <p>
                    
                    @foreach ($introLines as $line)
                    <?php 
                    $var="";
                    if(strpos($line,"verify"))
                    {
                        $var = "We are so happy to have you be part of the crew! Lets Get  started with introduction of the site.";
                    }
                    if(strpos($line,"reset"))
                    {
                        $var="Forgot your password? Don't worry, we've all been there. Just click below to reset your password. ";
                    }
                    echo"$var";
                  ?>

                    @endforeach
                  
                  </p>
                  <b>- Thanks (UrUploadz team)</b>
                </td>
              </tr>
            </tbody>
          </table>
          <table
            border="0"
            cellpadding="0"
            cellspacing="0"
            style="width: 100%; padding: 30px"
          >
            <tbody>
              <tr>
                <td align="center" style="text-align: center">
                  <a
                    href="<?php echo"$actionUrl" ?>"
                    style="
                      display: inline-block;
                      padding: 11px 30px;
                      font-size: 18px;
                      font-weight: bold;
                      color: #fff;
                      background: #87bf21;
                      text-decoration: none;
                    "
                  >
                    <?php
                     if(strpos($actionText,"verify"))
                        {
                            $actionText = "Get Started" ;
                        }

                    echo"$actionText";
                     ?>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
          <table
            border="0"
            cellpadding="0"
            cellspacing="0"
            style="width: 100%; padding: 30px; background: #151515"
          >
            <tbody>
              <tr>
                <td align="left">
                  <a href="#" target="_blank"
                    ><img
                      src="https://mcusercontent.com/ccbd1216cce51d294e9a2e86f/images/8e66ef22-0655-00cd-3a0d-8fd5c17df4f0.png"
                      alt="Uruploadz"
                      style="border: none"
                    />
                  </a>
                </td>
                <td align="right">
                  <a href="#" target="_blank" style="display: inline-block"
                    ><img
                      src="https://mcusercontent.com/ccbd1216cce51d294e9a2e86f/images/275b6bab-4bd3-3d34-9759-192ec1aec7b0.jpg "
                      alt="Uruploadz"
                      style="border: none"
                    />
                  </a>
                  <a href="#" target="_blank" style="display: inline-block"
                    ><img
                      src="https://mcusercontent.com/ccbd1216cce51d294e9a2e86f/images/7d29b3b9-a47a-f270-d334-1311599a034b.jpg"
                      alt="Uruploadz"
                      style="border: none"
                    />
                  </a>
                  <a href="#" target="_blank" style="display: inline-block"
                    ><img
                      src="https://mcusercontent.com/ccbd1216cce51d294e9a2e86f/images/1b690821-0a2f-2bd6-106a-28960c9c3310.jpg"
                      alt="Uruploadz"
                      style="border: none"
                    />
                  </a>
                  <a href="#" target="_blank" style="display: inline-block"
                    ><img
                      src="https://mcusercontent.com/ccbd1216cce51d294e9a2e86f/images/b2f9aa10-e7da-d5e2-fdaf-415c7a358592.jpg"
                      alt="Uruploadz"
                      style="border: none"
                    />
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
     
      </div>
    </div>
  </body>
</html>
