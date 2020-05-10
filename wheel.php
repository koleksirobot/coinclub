<?php $ {
    "GLOBALS"
}
["enpwruy"] = "etq";
$ {
    "GLOBALS"
}
["xksdnfqyu"] = "ambi";
$ {
    "GLOBALS"
}
["qjffokt"] = "js";
$ {
    "GLOBALS"
}
["oyyqcglgpkbz"] = "j";
$ {
    "GLOBALS"
}
["dfgqzghzs"] = "result";
$ {
    "GLOBALS"
}
["tblqpvq"] = "header";
$ {
    "GLOBALS"
}
["mtyjhf"] = "z";
$ {
    "GLOBALS"
}
["qvpmfvo"] = "respons";
$ {
    "GLOBALS"
}
["duwgyplemh"] = "ch";
$ {
    "GLOBALS"
}
["cjlhebmfbj"] = "jsonAuth";
$ {
    "GLOBALS"
}
["ylvlmaqjb"] = "responsx";
$ {
    "GLOBALS"
}
["iokbjf"] = "url";
$ {
    "GLOBALS"
}
["ldkqxhjqslh"] = "config";
@system("clear");
$ {
    "GLOBALS"
}
["sbbabpz"] = "responsx";
date_default_timezone_set("Asia/Jakarta");
$ {
    "GLOBALS"
}
["pwnzoucubb"] = "config";
require_once ("sdata-modules.php");
echo "

";
$ {
    "GLOBALS"
}
["bdbggvbavu"] = "jsonAuth";
echo "Support By BLOGGER Me http://www.tutorialhamaballah.blogspot.com
";
$ {
    "GLOBALS"
}
["pbeimbsh"] = "jsonAuth";
echo "[] Bots Are Running ... PLEASE WAIT ..
";
$ {
    "GLOBALS"
}
["opuafcmihcz"] = "urls";
$pgjjwyf = "config";
$ {
    "GLOBALS"
}
["icvzgo"] = "jsonAuth";
echo "[] IF THERE IS NO RESPONSE FROM SERVER, THEN THE TOKEN OR CONFIG IS WRONG

";
require "DDC.php";
$qezlujbhek = "urls";
$ {
    $qezlujbhek
}
[] = array("url" => "http://api.coinclub.global/api/v1/user/getUserDetail?token=" . $ {
    $ {
        "GLOBALS"
    }
    ["ldkqxhjqslh"]
}
["token"] . "&fromUserId=" . $ {
    $ {
        "GLOBALS"
    }
    ["pwnzoucubb"]
}
["fromUserId"] . "&userId=" . $ {
    $ {
        "GLOBALS"
    }
    ["ldkqxhjqslh"]
}
["userId"] . "&platform=1&accessKeyId=" . $ {
    $pgjjwyf
}
["accessKeyId"] . "&timestamp=1546935030192&versionCode=1.5.8&nonce=&version=1");
$ {
    $ {
        "GLOBALS"
    }
    ["sbbabpz"]
} = $sdata->sdata($ {
    $ {
        "GLOBALS"
    }
    ["opuafcmihcz"]
});
unset($ {
    $ {
        "GLOBALS"
    }
    ["iokbjf"]
});
$ {
    $ {
        "GLOBALS"
    }
    ["pbeimbsh"]
} = json_decode($ {
    $ {
        "GLOBALS"
    }
    ["ylvlmaqjb"]
}
[0]["respons"], true);
if ($ {
    $ {
        "GLOBALS"
    }
    ["bdbggvbavu"]
}
["errcode"] == 1000 && !empty($ {
    $ {
        "GLOBALS"
    }
    ["icvzgo"]
}
["data"]["user"]["userName"])) {
    echo "[] ACCOUNT INFORMATION []
";
    $fnbiakybkg = "jsonAuth";
    echo "[] Balance : " . $ {
        $fnbiakybkg
    }
    ["data"]["totalBalance"] . "
[] User Id : " . $ {
        $ {
            "GLOBALS"
        }
        ["cjlhebmfbj"]
    }
    ["data"]["user"]["userId"] . "
";
    echo "[] User Name : " . $ {
        $ {
            "GLOBALS"
        }
        ["cjlhebmfbj"]
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
function send($path, $post, $header) {
    $ {
        $ {
            "GLOBALS"
        }
        ["duwgyplemh"]
    } = curl_init();
    $jkdxcgqqjy = "ch";
    $ {
        "GLOBALS"
    }
    ["gsbyruz"] = "ch";
    $ {
        "GLOBALS"
    }
    ["ijjmgjw"] = "respons";
    $ {
        "GLOBALS"
    }
    ["powolyotd"] = "header";
    $nzrkjnajp = "ch";
    curl_setopt($ {
        $nzrkjnajp
    }, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ {
        $jkdxcgqqjy
    }, CURLOPT_URL, "http://api.coinclub.global$path");
    $ozdhxaufyct = "post";
    curl_setopt($ {
        $ {
            "GLOBALS"
        }
        ["duwgyplemh"]
    }, CURLOPT_POST, 1);
    curl_setopt($ {
        $ {
            "GLOBALS"
        }
        ["duwgyplemh"]
    }, CURLOPT_POSTFIELDS, $ {
        $ozdhxaufyct
    });
    curl_setopt($ {
        $ {
            "GLOBALS"
        }
        ["gsbyruz"]
    }, CURLOPT_HTTPHEADER, $ {
        $ {
            "GLOBALS"
        }
        ["powolyotd"]
    });
    $ {
        $ {
            "GLOBALS"
        }
        ["qvpmfvo"]
    } = curl_exec($ {
        $ {
            "GLOBALS"
        }
        ["duwgyplemh"]
    });
    curl_close($ {
        $ {
            "GLOBALS"
        }
        ["duwgyplemh"]
    });
    return $ {
        $ {
            "GLOBALS"
        }
        ["ijjmgjw"]
    };
}
while (TRUE) {
    $ {
        "GLOBALS"
    }
    ["hugihhe"] = "config";
    $eimhvmn = "header";
    $ {
        "GLOBALS"
    }
    ["aptmyqzfwh"] = "z";
    $ {
        $eimhvmn
    } = "token: ab2407d114b54b0db60dea1c5cf3646f
deviceId: ce0c9a0f7c6e0d5bCB5A28L9BT
Content-Type: application/x-www-form-urlencoded; charset=UTF-8
Content-Length: 173
Host: api.coinclub.global
Connection: Keep-Alive
Accept-Encoding: gzip
User-Agent: okhttp/3.9.0";
    $ {
        $ {
            "GLOBALS"
        }
        ["mtyjhf"]
    } = explode("
", $ {
        $ {
            "GLOBALS"
        }
        ["tblqpvq"]
    });
    $ohlxkir = "result";
    send("/api/v1/lottery/draw", "userId=" . $ {
        $ {
            "GLOBALS"
        }
        ["ldkqxhjqslh"]
    }
    ["userId"] . "&platform=1&accessKeyId=" . $ {
        $ {
            "GLOBALS"
        }
        ["ldkqxhjqslh"]
    }
    ["accessKeyId"] . "&timestamp=1547055943649&versionCode=1.5.8&nonce=" . $ {
        $ {
            "GLOBALS"
        }
        ["ldkqxhjqslh"]
    }
    ["nonce"] . "&version=1", $ {
        $ {
            "GLOBALS"
        }
        ["mtyjhf"]
    });
    $ {
        $ {
            "GLOBALS"
        }
        ["dfgqzghzs"]
    } = send("/api/v1/lottery/draw", "userId=" . $ {
        $ {
            "GLOBALS"
        }
        ["ldkqxhjqslh"]
    }
    ["userId"] . "&platform=1&accessKeyId=" . $ {
        $ {
            "GLOBALS"
        }
        ["ldkqxhjqslh"]
    }
    ["accessKeyId"] . "&timestamp=1547055943649&versionCode=1.5.8&nonce=" . $ {
        $ {
            "GLOBALS"
        }
        ["hugihhe"]
    }
    ["nonce"] . "&version=1", $ {
        $ {
            "GLOBALS"
        }
        ["aptmyqzfwh"]
    });
    $ {
        $ {
            "GLOBALS"
        }
        ["oyyqcglgpkbz"]
    } = json_decode($ {
        $ohlxkir
    });
    if ($j->errcode == "1000") {
        $ {
            "GLOBALS"
        }
        ["jfpklait"] = "result";
        $vmvbqxvimgmc = "ambi";
        $ {
            "GLOBALS"
        }
        ["dpzdrnukmmr"] = "pr";
        $ {
            $ {
                "GLOBALS"
            }
            ["qjffokt"]
        } = json_decode($ {
            $ {
                "GLOBALS"
            }
            ["jfpklait"]
        });
        $ {
            "GLOBALS"
        }
        ["cuixqty"] = "ambil";
        $ {
            "GLOBALS"
        }
        ["ghlxcakjhuhu"] = "ambil";
        $leoqzdua = "bl";
        $ {
            $vmvbqxvimgmc
        } = get_object_vars($js->data->account);
        $sspwyvozxq = "ambi";
        $ {
            $ {
                "GLOBALS"
            }
            ["cuixqty"]
        } = get_object_vars($js->data);
        $ {
            $ {
                "GLOBALS"
            }
            ["dpzdrnukmmr"]
        } = $ {
            $ {
                "GLOBALS"
            }
            ["ghlxcakjhuhu"]
        }
        ["prizeType"];
        $ {
            "GLOBALS"
        }
        ["clkgrrkw"] = "bl";
        $ {
            "GLOBALS"
        }
        ["gchfaqwgtrvo"] = "pr";
        $ {
            $leoqzdua
        } = $ {
            $sspwyvozxq
        }
        ["balance"];
        $ {
            "GLOBALS"
        }
        ["endqptbykws"] = "etq";
        $ {
            $ {
                "GLOBALS"
            }
            ["endqptbykws"]
        } = $ {
            $ {
                "GLOBALS"
            }
            ["xksdnfqyu"]
        }
        ["ethQuota"];
        echo "Prize Code :" . $ {
            $ {
                "GLOBALS"
            }
            ["gchfaqwgtrvo"]
        } . " | CCU Balance :" . $ {
            $ {
                "GLOBALS"
            }
            ["clkgrrkw"]
        } . " | ETH Quota :" . $ {
            $ {
                "GLOBALS"
            }
            ["enpwruy"]
        } . "
";
        sleep(3);
    } else {
        if ($j->errcode == "1002") {
            echo "Maximum Reached 
";
            echo "50 Spin Perday
";
            break;
        }
    }
}
?>
