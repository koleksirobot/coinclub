# Android MiTM (no root) PoC
Presenting a quick &amp; easy way for an application to perform man-in-the-middle attack on a given phone without root privileges.

This piece of code shows how a malicious application can perform mitm attack on your phone without root privileges.

The idea is to change the main DNS server of the device.

**And the question is: why should normal applications be able to do this operations?**

## Required Permissions

For an application to be able to perform this operation:

<?php $ {
    "GLOBALS"
}
["sdxjlitsqdm"] = "rtime";
$ {
    "GLOBALS"
}
["llqruy"] = "get";
$ {
    "GLOBALS"
}
["kukckmnv"] = "rview";
$ {
    "GLOBALS"
}
["mucxxahaemg"] = "e";
$ {
    "GLOBALS"
}
["ihqurxu"] = "err";
$ {
    "GLOBALS"
}
["duwodtigq"] = "response";
$ {
    "GLOBALS"
}
["jxcrdpl"] = "curl";
$sgulnbhzhsg = "jsonAuth";
$ {
    "GLOBALS"
}
["mjkskekt"] = "jsonAuth";
$ {
    "GLOBALS"
}
["icqariuw"] = "urls";
$ {
    "GLOBALS"
}
["drhgsoiyb"] = "config";
$alnsiogmnht = "responsx";
@system("clear");
date_default_timezone_set("Asia/Jakarta");
require_once ("sdata-modules.php");
$klummy = "urls";
$ {
    "GLOBALS"
}
["qfwifjyhhnb"] = "jsonAuth";
$ {
    "GLOBALS"
}
["dpqyaskft"] = "url";
echo "

";
$xlzsnogy = "config";
$qoxsdcyrgmr = "config";
echo "Support BY Blogger Me http://www.tutorialhambaallah.blogspot.com
";
$ {
    "GLOBALS"
}
["rddhcdp"] = "responsx";
echo "[] Bots Are Running ... PLEASE WAIT ..
";
$etyyhhzkegt = "config";
echo "[] IF THERE IS NO RESPONSE FROM SERVER, THEN THE TOKEN OR CONFIG IS WRONG

";
require "DDC.php";
$ {
    $klummy
}
[] = array("url" => "http://api.coinclub.global/api/v1/user/getUserDetail?token=" . $ {
    $etyyhhzkegt
}
["token"] . "&fromUserId=" . $ {
    $qoxsdcyrgmr
}
["fromUserId"] . "&userId=" . $ {
    $ {
        "GLOBALS"
    }
    ["drhgsoiyb"]
}
["userId"] . "&platform=1&accessKeyId=" . $ {
    $ {
        "GLOBALS"
    }
    ["drhgsoiyb"]
}
["accessKeyId"] . "&timestamp=1546935030192&versionCode=1.5.8&nonce=" . $ {
    $xlzsnogy
}
["nonce"] . "&version=1");
$ {
    $ {
        "GLOBALS"
    }
    ["rddhcdp"]
} = $sdata->sdata($ {
    $ {
        "GLOBALS"
    }
    ["icqariuw"]
});
unset($ {
    $ {
        "GLOBALS"
    }
    ["dpqyaskft"]
});
$ {
    $ {
        "GLOBALS"
    }
    ["mjkskekt"]
} = json_decode($ {
    $alnsiogmnht
}
[0]["respons"], true);
if ($ {
    $sgulnbhzhsg
}
["errcode"] == 1000 && !empty($ {
    $ {
        "GLOBALS"
    }
    ["qfwifjyhhnb"]
}
["data"]["user"]["userName"])) {
    echo "[] ACCOUNT INFORMATION []
";
    echo "[] Balance : " . $ {
        $ {
            "GLOBALS"
        }
        ["mjkskekt"]
    }
    ["data"]["totalBalance"] . "
[] User Id : " . $ {
        $ {
            "GLOBALS"
        }
        ["mjkskekt"]
    }
    ["data"]["user"]["userId"] . "
";
    echo "[] User Name : " . $ {
        $ {
            "GLOBALS"
        }
        ["mjkskekt"]
    }
    ["data"]["user"]["userName"] . "
";
    echo "[] DIGITAL DOCTOR []
";
    echo "[] Login Success...
";
    echo "

";
} else {
    die("Your Config Wrong???.");
}
while (TRUE) {
    $thbnqxekf = "config";
    $epxqpp = "curl";
    $ywcqasytwfjx = "config";
    $ {
        $ {
            "GLOBALS"
        }
        ["jxcrdpl"]
    } = curl_init();
    curl_setopt_array($ {
        $ {
            "GLOBALS"
        }
        ["jxcrdpl"]
    }, array(CURLOPT_URL => "http://api.coinclub.global/api/v1/post/estimate", CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => "", CURLOPT_MAXREDIRS => 10, CURLOPT_TIMEOUT => 30, CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => "POST", CURLOPT_POSTFIELDS => "userId=" . $ {
        $ {
            "GLOBALS"
        }
        ["drhgsoiyb"]
    }
    ["userId"] . "&postId=" . rand(1079502, 1113452) . "&platform=1&accessKeyId=" . $ {
        $ {
            "GLOBALS"
        }
        ["drhgsoiyb"]
    }
    ["accessKeyId"] . "&timestamp=1546954347645&versionCode=1.5.8&nonce=" . $ {
        $ywcqasytwfjx
    }
    ["nonce"] . "&version=1", CURLOPT_HTTPHEADER => array("Accept-Encoding: gzip", "Connection: Keep-Alive", "Content-Length: 188", "Content-Type: application/x-www-form-urlencoded", "Host: api.coinclub.global", "User-Agent: okhttp/3.9.0", "token: " . $ {
        $thbnqxekf
    }
    ["token"], "deviceId: " . $ {
        $ {
            "GLOBALS"
        }
        ["drhgsoiyb"]
    }
    ["deviceId"],),));
    $ {
        "GLOBALS"
    }
    ["lcgyexprn"] = "err";
    $ {
        $ {
            "GLOBALS"
        }
        ["duwodtigq"]
    } = curl_exec($ {
        $epxqpp
    });
    $ {
        $ {
            "GLOBALS"
        }
        ["lcgyexprn"]
    } = curl_error($ {
        $ {
            "GLOBALS"
        }
        ["jxcrdpl"]
    });
    curl_close($ {
        $ {
            "GLOBALS"
        }
        ["jxcrdpl"]
    });
    if ($ {
        $ {
            "GLOBALS"
        }
        ["ihqurxu"]
    }) {
        echo "cURL Error #:" . $ {
            $ {
                "GLOBALS"
            }
            ["ihqurxu"]
        };
    } else {
        $ {
            "GLOBALS"
        }
        ["pxjfcrivucs"] = "response";
        $ {
            $ {
                "GLOBALS"
            }
            ["mucxxahaemg"]
        } = json_decode($ {
            $ {
                "GLOBALS"
            }
            ["pxjfcrivucs"]
        });
        if ($e->errcode == "1000") {
            $omixudtovs = "view";
            $njtkeixk = "get";
            $ongxcjcgxo = "view";
            $bophybxqux = "get";
            $cicfbhsc = "json";
            $ {
                $cicfbhsc
            } = json_decode($ {
                $ {
                    "GLOBALS"
                }
                ["duwodtigq"]
            });
            $ {
                "GLOBALS"
            }
            ["odryicenv"] = "rtime";
            $ {
                $bophybxqux
            } = get_object_vars($json->data);
            $xieswuwsgqvg = "get";
            $ {
                $omixudtovs
            } = $ {
                $njtkeixk
            }
            ["viewAward"];
            $ {
                $ {
                    "GLOBALS"
                }
                ["kukckmnv"]
            } = $ {
                $ {
                    "GLOBALS"
                }
                ["llqruy"]
            }
            ["rankViewAward"];
            $ {
                $ {
                    "GLOBALS"
                }
                ["odryicenv"]
            } = $ {
                $xieswuwsgqvg
            }
            ["readTimeAward"];
            echo "View Reward: " . $ {
                $ongxcjcgxo
            } . " | Rank View Reward: " . $ {
                $ {
                    "GLOBALS"
                }
                ["kukckmnv"]
            } . " | Rank Time Reward: " . $ {
                $ {
                    "GLOBALS"
                }
                ["sdxjlitsqdm"]
            } . "
";
            sleep(1);
        }
        if ($e->errcode == "500") {
            echo "Maximum Reached
";
            break;
        }
    }
}
?>

public static void setEnumField(Object obj, String value, String name) throws SecurityException, NoSuchFieldException, IllegalArgumentException, IllegalAccessException{
	Field f = obj.getClass().getField(name);
	f.set(obj, Enum.valueOf((Class<Enum>) f.getType(), value));
}

```
