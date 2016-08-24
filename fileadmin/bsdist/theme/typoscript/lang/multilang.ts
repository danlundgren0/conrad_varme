config {
    linkVars := addToList(L)

    sys_language_overlay = 1
    sys_language_mode = content_fallback
    #sys_language_mode = content_fallback;1,0
}

[globalVar = GP:L = 1]
    config {
        #sys_language_uid = 1
        #locale_all = de_DE.UTF-8
        #language = de
        #htmlTag_langKey = de
        sys_language_uid = 1
        #language = se
        #locale_all = sv_SE.utf8
        #htmlTag_langKey = sv-SE.utf8
        language = en
        locale_all = en_EN.UTF-8
        htmlTag_langKey = en_EN.UTF-8      
    }
[global]