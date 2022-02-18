$(document).ready(function () {
  //signin
  $("#submit").click(function () {
    $("#ModalCenter").modal("show");

    var password = $("#pword").val();

    if (password == null || password == "") {
      $("#ModalCenter").on("shown.bs.modal", function () {
        $("#ModalCenter").modal("hide");

        $(toastr.error("Invalid Password Inputed"));
      });
    } else {
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: { password: password },
        success: function (data) {
          $(toastr.error(data)).html(data);
        },
      });
    }
  });

  //------------- enroll ------------//
  $("#enroll").click(function () {
    var surname = $("#surname").val();
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var date = $("#date").val();
    var month = $("#month").val();
    var year = $("#year").val();
    var gender = $("#gender").val();
    var schlst = $("#schlst").val();
    var classr = $("#class").val();
    var dept = $("#dept").val();
    var parent = $("#parent").val();
    var relation = $("#relation").val();
    var occupation = $("#occupation").val();
    var add = $("#add").val();
    var dnum = $("#dnum").val();
    var mnum = $("#mnum").val();
    var pword = $("#pword").val();
    var rpword = $("#rpword").val();
    var acf = $("#acf").val();
    var schf = $("#schf").val();

    if (surname == null || surname == "") {
      $(toastr.error("Kindly input Surname"));
    } else {
      if (firstname == null || firstname == "") {
        $(toastr.error("Kindly input firstname"));
      } else {
        if (lastname == null || lastname == "") {
          $(toastr.error("Kindly input lastname"));
        } else {
          if (date == null || date == "") {
            $(toastr.error("Kindly input date of birth"));
          } else {
            if (month == null || month == "") {
              $(toastr.error("Kindly input month of birth"));
            } else {
              if (year == null || year == "") {
                $(toastr.error("Kindly input year of birth"));
              } else {
                if (schlst == null || schlst == "") {
                  $(toastr.error("Kindly input school last attended"));
                } else {
                  if (parent == null || parent == "") {
                    $(toastr.error("Kindly input name of parent"));
                  } else {
                    if (occupation == null || occupation == "") {
                      $(toastr.error("Kindly input parent occupation"));
                    } else {
                      if (add == null || add == "") {
                        $(toastr.error("Kindly input residential address"));
                      } else {
                        if (dnum == null || dnum == "") {
                          $(toastr.error("Kindly input Father Number"));
                        } else {
                          $("#ModalCenter").modal("show");
                          $(toastr.error("Loading... Please wait"));

                          $.ajax({
                            type: "post",
                            url: "functions/init.php",
                            data: {
                              surname: surname,
                              firstname: firstname,
                              lastname: lastname,
                              date: date,
                              month: month,
                              year: year,
                              gender: gender,
                              schlst: schlst,
                              classr: classr,
                              dept: dept,
                              parent: parent,
                              relation: relation,
                              occupation: occupation,
                              add: add,
                              dnum: dnum,
                              mnum: mnum,
                              pword: pword,
                              rpword: rpword,
                              acf: acf,
                              schf: schf,
                            },
                            success: function (data) {
                              $(toastr.error(data)).html(data);
                            },
                          });
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  });

  //----------- enroll passport ------//

  $("#filenroll").click(function () {
    var fd = new FormData();
    var files = $("#file").prop("files")[0];
    fd.append("file", files);

    if (files == null || files == "") {
      $(toastr.error("Student Passport can`t be empty"));
    } else {
      $("#ModalCenter").modal("show");
      $(toastr.error("Loading... Please wait"));

      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          $(toastr.error(data)).html(data);
        },
      });
    }
  });

  //------- enroll edit -------//

  $("#denroll").click(function () {
    var surname = $("#surname").val();
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var date = $("#date").val();
    var mth = $("#month").val();
    var year = $("#year").val();
    var gender = $("#gender").val();
    var schlst = $("#schlst").val();
    var classr = $("#class").val();
    var dept = $("#dept").val();
    var parent = $("#parent").val();
    var relation = $("#relation").val();
    var occupation = $("#occupation").val();
    var add = $("#add").val();
    var dnum = $("#dnum").val();
    var mnum = $("#mnum").val();
    var pword = $("#pword").val();
    var rpword = $("#rpword").val();
    var acf = $("#acf").val();
    var schf = $("#schf").val();
    var adm = $("#idn").val();
    var feestat = $('#feestat').val();

    if (surname == null || surname == "") {
      $(toastr.error("Kindly input Surname"));
    } else {
      if (firstname == null || firstname == "") {
        $(toastr.error("Kindly input firstname"));
      } else {
        if (lastname == null || lastname == "") {
          $(toastr.error("Kindly input lastname"));
        } else {
          if (date == null || date == "") {
            $(toastr.error("Kindly input date of birth"));
          } else {
            if (mth == null || mth == "") {
              $(toastr.error("Kindly input month of birth"));
            } else {
              if (year == null || year == "") {
                $(toastr.error("Kindly input year of birth"));
              } else {
                if (schlst == null || schlst == "") {
                  $(toastr.error("Kindly input school last attended"));
                } else {
                  if (parent == null || parent == "") {
                    $(toastr.error("Kindly input name of parent"));
                  } else {
                    if (occupation == null || occupation == "") {
                      $(toastr.error("Kindly input parent occupation"));
                    } else {
                      if (add == null || add == "") {
                        $(toastr.error("Kindly input residential address"));
                      } else {
                        if (dnum == null || dnum == "") {
                          $(toastr.error("Kindly input Father Number"));
                        } else {
                          $("#ModalCenter").modal("show");

                          $.ajax({
                            type: "post",
                            url: "functions/init.php",
                            data: {
                              surname: surname,
                              firstname: firstname,
                              lastname: lastname,
                              date: date,
                              mth: mth,
                              year: year,
                              gender: gender,
                              schlst: schlst,
                              classr: classr,
                              dept: dept,
                              parent: parent,
                              relation: relation,
                              occupation: occupation,
                              add: add,
                              dnum: dnum,
                              mnum: mnum,
                              pword: pword,
                              rpword: rpword,
                              acf: acf,
                              schf: schf,
                              adm: adm,
                              feestat: feestat,
                            },
                            success: function (data) {
                              $(toastr.error(data)).html(data);
                            },
                          });
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  });

  //edit upload
  $("#ufilenroll").click(function () {
    var fd = new FormData();
    var files = $("#file").prop("files")[0];
    fd.append("fle", files);

    if (files == null || files == "") {
      $(toastr.error("Student Passport can`t be empty"));
    } else {
      $("#ModalCenter").modal("show");
      $(toastr.error("Loading... Please wait"));

      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          $(toastr.error(data)).html(data);
        },
      });
    }
  });

  //---------------- delete student ---------//
  $("#delbtn").click(function () {
    var delst = $("#delst").val();

    if (delst == null || delst == "") {
      $(toastr.error("Invalid Admission no"));
    } else {
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: { delst: delst },
        success: function (data) {
          $(toastr.error(data)).html(data);
        },
      });
    }
  });

  // --------------appoint staff ----//
  $("#stsub").click(function () {
    var title = $("#title").val();
    var surname = $("#surname").val();
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var date = $("#date").val();
    var month = $("#month").val();
    var year = $("#year").val();
    var gender = $("#gender").val();
    var schlst = $("#schlst").val();
    var lass = $("#lass").val();
    var disc = $("#disc").val();
    var cat = $("#cat").val();
    var classr = $("#class").val();
    var dept = $("#dept").val();
    var post = $("#post").val();
    var subj = $("#subj").val();
    var parent = $("#parent").val();
    var relation = $("#relation").val();
    var occupation = $("#occupation").val();
    var add = $("#add").val();
    var add2 = $("#add2").val();
    var dnum = $("#dnum").val();
    var mnum = $("#mnum").val();
    var bsm = $("#bsm").val();
    var tam = $("#tam").val();
    var mall = $("#mall").val();

    if (surname == null || surname == "") {
      $(toastr.error("Staff Surname is empty"));
    } else {
      if (firstname == null || firstname == "") {
        $(toastr.error("Kindly Input staff firstname"));
      } else {
        if (lastname == null || lastname == "") {
          $(toastr.error("Lastname is empty"));
        } else {
          if (date == null || date == "") {
            $(toastr.error("Date of birth can`t be empty"));
          } else {
            if (month == null || month == "") {
              $(toastr.error("Month of birth can`t be empty"));
            } else {
              if (year == null || year == "") {
                $(toastr.error("Year of birth can`t be empty"));
              } else {
                if (schlst == null || schlst == "") {
                  $(toastr.error("Tertiary school attended is empty"));
                } else {
                  if (disc == null || disc == "") {
                    $(toastr.error("Area of specialization can`t be empty"));
                  } else {
                    if (post == null || post == "") {
                      $(toastr.error("Staff post is empty"));
                    } else {
                      if (subj == null || subj == "") {
                        $(toastr.error("Subject taught is empty"));
                      } else {
                        if (parent == null || parent == "") {
                          $(toastr.error("Input Next of Kin"));
                        } else {
                          if (occupation == null || occupation == "") {
                            $(toastr.error("Next of Kin occupation is empty"));
                          } else {
                            if (add == null || add == "") {
                              $(toastr.error("residential address is empty"));
                            } else {
                              if (add2 == null || add2 == "") {
                                $(
                                  toastr.error(
                                    "Kindly input Next of kin address"
                                  )
                                );
                              } else {
                                if (dnum == null || dnum == "") {
                                  $(toastr.error("Telephone Number is empty"));
                                } else {
                                  if (mnum == null || mnum == "") {
                                    $(
                                      toastr.error(
                                        "Next of kin Number can`t be empty"
                                      )
                                    );
                                  } else {
                                    if (bsm == null || bsm == "") {
                                      $(
                                        toastr.error(
                                          "Basic salary of staff can`t be empty"
                                        )
                                      );
                                    } else {
                                      $("#ModalCenter").modal("show");
                                      $(toastr.error("Loading... Please wait"));

                                      $.ajax({
                                        type: "post",
                                        url: "functions/init.php",
                                        data: {
                                          title: title,
                                          surname: surname,
                                          firstname: firstname,
                                          lastname: lastname,
                                          date: date,
                                          month: month,
                                          year: year,
                                          gender: gender,
                                          schlst: schlst,
                                          lass: lass,
                                          disc: disc,
                                          cat: cat,
                                          classr: classr,
                                          dept: dept,
                                          post: post,
                                          subj: subj,
                                          parent: parent,
                                          relation: relation,
                                          occupation: occupation,
                                          add: add,
                                          add2: add2,
                                          dnum: dnum,
                                          mnum: mnum,
                                          bsm: bsm,
                                          tam: tam,
                                          mall: mall,
                                        },
                                        success: function (data) {
                                          $(toastr.error(data)).html(data);
                                        },
                                      });
                                    }
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  });

  //----------- staff passport ------//

  $("#stafffilenroll").click(function () {
    var fd = new FormData();
    var stafffiles = $("#stafffile").prop("files")[0];
    fd.append("stfile", stafffiles);

    if (stafffiles == null || stafffiles == "") {
      $(toastr.error("Staff Passport can`t be empty"));
    } else {
      $("#ModalCenter").modal("show");
      $(toastr.error("Loading... Please wait"));

      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          $(toastr.error(data)).html(data);
        },
      });
    }
  });

  // --------------edit staff ----//
  $("#ustsub").click(function () {
    var title = $("#title").val();
    var sur = $("#surname").val();
    var first = $("#firstname").val();
    var lastname = $("#lastname").val();
    var date = $("#date").val();
    var month = $("#month").val();
    var year = $("#year").val();
    var gender = $("#gender").val();
    var schlst = $("#schlst").val();
    var lass = $("#lass").val();
    var disc = $("#disc").val();
    var cat = $("#cat").val();
    var classr = $("#class").val();
    var dept = $("#dept").val();
    var post = $("#post").val();
    var subj = $("#subj").val();
    var parent = $("#parent").val();
    var relation = $("#relation").val();
    var occupation = $("#occupation").val();
    var add = $("#add").val();
    var add2 = $("#add2").val();
    var dnum = $("#dnum").val();
    var mnum = $("#mnum").val();
    var bsm = $("#bsm").val();
    var tam = $("#tam").val();
    var mall = $("#mall").val();
    var data = $("#data").val();

    if (surname == null || surname == "") {
      $(toastr.error("Staff Surname is empty"));
    } else {
      if (firstname == null || firstname == "") {
        $(toastr.error("Kindly Input staff firstname"));
      } else {
        if (lastname == null || lastname == "") {
          $(toastr.error("Lastname is empty"));
        } else {
          if (date == null || date == "") {
            $(toastr.error("Date of birth can`t be empty"));
          } else {
            if (month == null || month == "") {
              $(toastr.error("Month of birth can`t be empty"));
            } else {
              if (year == null || year == "") {
                $(toastr.error("Year of birth can`t be empty"));
              } else {
                if (schlst == null || schlst == "") {
                  $(toastr.error("Tertiary school attended is empty"));
                } else {
                  if (disc == null || disc == "") {
                    $(toastr.error("Area of specialization can`t be empty"));
                  } else {
                    if (post == null || post == "") {
                      $(toastr.error("Staff post is empty"));
                    } else {
                      if (subj == null || subj == "") {
                        $(toastr.error("Subject taught is empty"));
                      } else {
                        if (parent == null || parent == "") {
                          $(toastr.error("Input Next of Kin"));
                        } else {
                          if (occupation == null || occupation == "") {
                            $(toastr.error("Next of Kin occupation is empty"));
                          } else {
                            if (add == null || add == "") {
                              $(toastr.error("residential address is empty"));
                            } else {
                              if (add2 == null || add2 == "") {
                                $(
                                  toastr.error(
                                    "Kindly input Next of kin address"
                                  )
                                );
                              } else {
                                if (dnum == null || dnum == "") {
                                  $(toastr.error("Telephone Number is empty"));
                                } else {
                                  if (mnum == null || mnum == "") {
                                    $(
                                      toastr.error(
                                        "Next of kin Number can`t be empty"
                                      )
                                    );
                                  } else {
                                    if (bsm == null || bsm == "") {
                                      $(
                                        toastr.error(
                                          "Basic salary of staff can`t be empty"
                                        )
                                      );
                                    } else {
                                      $("#ModalCenter").modal("show");
                                      $(toastr.error("Loading... Please wait"));

                                      $.ajax({
                                        type: "post",
                                        url: "functions/init.php",
                                        data: {
                                          title: title,
                                          sur: sur,
                                          first: first,
                                          lastname: lastname,
                                          date: date,
                                          month: month,
                                          year: year,
                                          gender: gender,
                                          schlst: schlst,
                                          lass: lass,
                                          disc: disc,
                                          cat: cat,
                                          classr: classr,
                                          dept: dept,
                                          post: post,
                                          subj: subj,
                                          parent: parent,
                                          relation: relation,
                                          occupation: occupation,
                                          add: add,
                                          add2: add2,
                                          dnum: dnum,
                                          mnum: mnum,
                                          bsm: bsm,
                                          tam: tam,
                                          mall: mall,
                                          data: data,
                                        },
                                        success: function (data) {
                                          $(toastr.error(data)).html(data);
                                        },
                                      });
                                    }
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  });

  //edit upload
  $("#stup").click(function () {
    var fd = new FormData();
    var files = $("#stupfile").prop("files")[0];
    fd.append("sfle", files);

    if (files == null || files == "") {
      $(toastr.error("Student Passport can`t be empty"));
    } else {
      $("#ModalCenter").modal("show");
      $(toastr.error("Loading... Please wait"));

      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          $(toastr.error(data)).html(data);
        },
      });
    }
  });

  //---------------- delete staff ---------//
  $("#stdelbtn").click(function () {
    var delstf = $("#delstaff").val();

    if (delstf == null || delstf == "") {
      $(toastr.error("Invalid Staff ID"));
    } else {
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: { delstf: delstf },
        success: function (data) {
          $(toastr.error(data)).html(data);
        },
      });
    }
  });

  //------------------ parent sms --------------//
  $("#prsms").click(function () {
    var msg = $("#msg").val();

    if (msg == null || msg == "") {
      $(toastr.error("Kindly input a message"));
    } else {
      $(toastr.error("Loading...Please wait"));
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: { msg: msg },
        success: function (data) {
          $(toastr.error(data)).html(data);
        },
      });
    }
  });

  //------------------staff sms --------------//
  $("#stfsms").click(function () {
    var msgr = $("#msgr").val();

    if (msgr == null || msgr == "") {
      $(toastr.error("Kindly input a message"));
    } else {
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: { msgr: msgr },
        success: function (data) {
          $(toastr.error(data)).html(data);
        },
      });
    }
  });
});
