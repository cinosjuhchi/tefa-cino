import "./assets/toastify-a54d70a1.mjs";
import "./auth.mjs";
import * as coreui from "@coreui/coreui";
import "axios";
import "jquery";
import "toastify-js";
import "glightbox";
import "isotope-layout";
import "aos";
const simplebar = "";
const custom = "";
!function(t, e) {
  "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = t || self).SimpleBar = e();
}(globalThis, function() {
  var t = "undefined" != typeof globalThis ? globalThis : "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : {};
  function e(t2, e2) {
    return t2(e2 = { exports: {} }, e2.exports), e2.exports;
  }
  var r, n, i = function(t2) {
    return t2 && t2.Math == Math && t2;
  }, o = i("object" == typeof globalThis && globalThis) || i("object" == typeof window && window) || i("object" == typeof self && self) || i("object" == typeof t && t) || function() {
    return this;
  }() || Function("return this")(), s = Object.defineProperty, a = function(t2, e2) {
    try {
      s(o, t2, { value: e2, configurable: true, writable: true });
    } catch (r2) {
      o[t2] = e2;
    }
    return e2;
  }, c = o["__core-js_shared__"] || a("__core-js_shared__", {}), l = e(function(t2) {
    (t2.exports = function(t3, e2) {
      return c[t3] || (c[t3] = void 0 !== e2 ? e2 : {});
    })("versions", []).push({ version: "3.22.6", mode: "global", copyright: "© 2014-2022 Denis Pushkarev (zloirock.ru)", license: "https://github.com/zloirock/core-js/blob/v3.22.6/LICENSE", source: "https://github.com/zloirock/core-js" });
  }), u = function(t2) {
    try {
      return !!t2();
    } catch (t3) {
      return true;
    }
  }, f = !u(function() {
    var t2 = (function() {
    }).bind();
    return "function" != typeof t2 || t2.hasOwnProperty("prototype");
  }), h = Function.prototype, d = h.bind, p = h.call, v = f && d.bind(p, p), g = f ? function(t2) {
    return t2 && v(t2);
  } : function(t2) {
    return t2 && function() {
      return p.apply(t2, arguments);
    };
  }, b = o.TypeError, y = function(t2) {
    if (null == t2)
      throw b("Can't call method on " + t2);
    return t2;
  }, m = o.Object, x = function(t2) {
    return m(y(t2));
  }, E = g({}.hasOwnProperty), w = Object.hasOwn || function(t2, e2) {
    return E(x(t2), e2);
  }, O = 0, S = Math.random(), A = g(1 .toString), k = function(t2) {
    return "Symbol(" + (void 0 === t2 ? "" : t2) + ")_" + A(++O + S, 36);
  }, T = function(t2) {
    return "function" == typeof t2;
  }, L = function(t2) {
    return T(t2) ? t2 : void 0;
  }, R = function(t2, e2) {
    return arguments.length < 2 ? L(o[t2]) : o[t2] && o[t2][e2];
  }, _ = R("navigator", "userAgent") || "", j = o.process, z = o.Deno, M = j && j.versions || z && z.version, C = M && M.v8;
  C && (n = (r = C.split("."))[0] > 0 && r[0] < 4 ? 1 : +(r[0] + r[1])), !n && _ && (!(r = _.match(/Edge\/(\d+)/)) || r[1] >= 74) && (r = _.match(/Chrome\/(\d+)/)) && (n = +r[1]);
  var N = n, W = !!Object.getOwnPropertySymbols && !u(function() {
    var t2 = Symbol();
    return !String(t2) || !(Object(t2) instanceof Symbol) || !Symbol.sham && N && N < 41;
  }), I = W && !Symbol.sham && "symbol" == typeof Symbol.iterator, P = l("wks"), B = o.Symbol, D = B && B.for, F = I ? B : B && B.withoutSetter || k, V = function(t2) {
    if (!w(P, t2) || !W && "string" != typeof P[t2]) {
      var e2 = "Symbol." + t2;
      W && w(B, t2) ? P[t2] = B[t2] : P[t2] = I && D ? D(e2) : F(e2);
    }
    return P[t2];
  }, $ = {};
  $[V("toStringTag")] = "z";
  var X = "[object z]" === String($), H = !u(function() {
    return 7 != Object.defineProperty({}, 1, { get: function() {
      return 7;
    } })[1];
  }), q = function(t2) {
    return "object" == typeof t2 ? null !== t2 : T(t2);
  }, Y = o.document, G = q(Y) && q(Y.createElement), U = function(t2) {
    return G ? Y.createElement(t2) : {};
  }, K = !H && !u(function() {
    return 7 != Object.defineProperty(U("div"), "a", { get: function() {
      return 7;
    } }).a;
  }), J = H && u(function() {
    return 42 != Object.defineProperty(function() {
    }, "prototype", { value: 42, writable: false }).prototype;
  }), Q = o.String, Z = o.TypeError, tt = function(t2) {
    if (q(t2))
      return t2;
    throw Z(Q(t2) + " is not an object");
  }, et = Function.prototype.call, rt = f ? et.bind(et) : function() {
    return et.apply(et, arguments);
  }, nt = g({}.isPrototypeOf), it = o.Object, ot = I ? function(t2) {
    return "symbol" == typeof t2;
  } : function(t2) {
    var e2 = R("Symbol");
    return T(e2) && nt(e2.prototype, it(t2));
  }, st = o.String, at = function(t2) {
    try {
      return st(t2);
    } catch (t3) {
      return "Object";
    }
  }, ct = o.TypeError, lt = function(t2) {
    if (T(t2))
      return t2;
    throw ct(at(t2) + " is not a function");
  }, ut = function(t2, e2) {
    var r2 = t2[e2];
    return null == r2 ? void 0 : lt(r2);
  }, ft = o.TypeError, ht = o.TypeError, dt = V("toPrimitive"), pt = function(t2, e2) {
    if (!q(t2) || ot(t2))
      return t2;
    var r2, n2 = ut(t2, dt);
    if (n2) {
      if (void 0 === e2 && (e2 = "default"), r2 = rt(n2, t2, e2), !q(r2) || ot(r2))
        return r2;
      throw ht("Can't convert object to primitive value");
    }
    return void 0 === e2 && (e2 = "number"), function(t3, e3) {
      var r3, n3;
      if ("string" === e3 && T(r3 = t3.toString) && !q(n3 = rt(r3, t3)))
        return n3;
      if (T(r3 = t3.valueOf) && !q(n3 = rt(r3, t3)))
        return n3;
      if ("string" !== e3 && T(r3 = t3.toString) && !q(n3 = rt(r3, t3)))
        return n3;
      throw ft("Can't convert object to primitive value");
    }(t2, e2);
  }, vt = function(t2) {
    var e2 = pt(t2, "string");
    return ot(e2) ? e2 : e2 + "";
  }, gt = o.TypeError, bt = Object.defineProperty, yt = Object.getOwnPropertyDescriptor, mt = { f: H ? J ? function(t2, e2, r2) {
    if (tt(t2), e2 = vt(e2), tt(r2), "function" == typeof t2 && "prototype" === e2 && "value" in r2 && "writable" in r2 && !r2.writable) {
      var n2 = yt(t2, e2);
      n2 && n2.writable && (t2[e2] = r2.value, r2 = { configurable: "configurable" in r2 ? r2.configurable : n2.configurable, enumerable: "enumerable" in r2 ? r2.enumerable : n2.enumerable, writable: false });
    }
    return bt(t2, e2, r2);
  } : bt : function(t2, e2, r2) {
    if (tt(t2), e2 = vt(e2), tt(r2), K)
      try {
        return bt(t2, e2, r2);
      } catch (t3) {
      }
    if ("get" in r2 || "set" in r2)
      throw gt("Accessors not supported");
    return "value" in r2 && (t2[e2] = r2.value), t2;
  } }, xt = function(t2, e2) {
    return { enumerable: !(1 & t2), configurable: !(2 & t2), writable: !(4 & t2), value: e2 };
  }, Et = H ? function(t2, e2, r2) {
    return mt.f(t2, e2, xt(1, r2));
  } : function(t2, e2, r2) {
    return t2[e2] = r2, t2;
  }, wt = Function.prototype, Ot = H && Object.getOwnPropertyDescriptor, St = w(wt, "name"), At = { EXISTS: St, PROPER: St && "something" === (function() {
  }).name, CONFIGURABLE: St && (!H || H && Ot(wt, "name").configurable) }, kt = g(Function.toString);
  T(c.inspectSource) || (c.inspectSource = function(t2) {
    return kt(t2);
  });
  var Tt, Lt, Rt, _t = c.inspectSource, jt = o.WeakMap, zt = T(jt) && /native code/.test(_t(jt)), Mt = l("keys"), Ct = function(t2) {
    return Mt[t2] || (Mt[t2] = k(t2));
  }, Nt = {}, Wt = o.TypeError, It = o.WeakMap;
  if (zt || c.state) {
    var Pt = c.state || (c.state = new It()), Bt = g(Pt.get), Dt = g(Pt.has), Ft = g(Pt.set);
    Tt = function(t2, e2) {
      if (Dt(Pt, t2))
        throw new Wt("Object already initialized");
      return e2.facade = t2, Ft(Pt, t2, e2), e2;
    }, Lt = function(t2) {
      return Bt(Pt, t2) || {};
    }, Rt = function(t2) {
      return Dt(Pt, t2);
    };
  } else {
    var Vt = Ct("state");
    Nt[Vt] = true, Tt = function(t2, e2) {
      if (w(t2, Vt))
        throw new Wt("Object already initialized");
      return e2.facade = t2, Et(t2, Vt, e2), e2;
    }, Lt = function(t2) {
      return w(t2, Vt) ? t2[Vt] : {};
    }, Rt = function(t2) {
      return w(t2, Vt);
    };
  }
  var $t = { set: Tt, get: Lt, has: Rt, enforce: function(t2) {
    return Rt(t2) ? Lt(t2) : Tt(t2, {});
  }, getterFor: function(t2) {
    return function(e2) {
      var r2;
      if (!q(e2) || (r2 = Lt(e2)).type !== t2)
        throw Wt("Incompatible receiver, " + t2 + " required");
      return r2;
    };
  } }, Xt = e(function(t2) {
    var e2 = At.CONFIGURABLE, r2 = $t.enforce, n2 = $t.get, i2 = Object.defineProperty, o2 = H && !u(function() {
      return 8 !== i2(function() {
      }, "length", { value: 8 }).length;
    }), s2 = String(String).split("String"), a2 = t2.exports = function(t3, n3, a3) {
      if ("Symbol(" === String(n3).slice(0, 7) && (n3 = "[" + String(n3).replace(/^Symbol\(([^)]*)\)/, "$1") + "]"), a3 && a3.getter && (n3 = "get " + n3), a3 && a3.setter && (n3 = "set " + n3), (!w(t3, "name") || e2 && t3.name !== n3) && i2(t3, "name", { value: n3, configurable: true }), o2 && a3 && w(a3, "arity") && t3.length !== a3.arity && i2(t3, "length", { value: a3.arity }), a3 && w(a3, "constructor") && a3.constructor) {
        if (H)
          try {
            i2(t3, "prototype", { writable: false });
          } catch (t4) {
          }
      } else
        t3.prototype = void 0;
      var c2 = r2(t3);
      return w(c2, "source") || (c2.source = s2.join("string" == typeof n3 ? n3 : "")), t3;
    };
    Function.prototype.toString = a2(function() {
      return T(this) && n2(this).source || _t(this);
    }, "toString");
  }), Ht = function(t2, e2, r2, n2) {
    n2 || (n2 = {});
    var i2 = n2.enumerable, o2 = void 0 !== n2.name ? n2.name : e2;
    return T(r2) && Xt(r2, o2, n2), n2.global ? i2 ? t2[e2] = r2 : a(e2, r2) : (n2.unsafe ? t2[e2] && (i2 = true) : delete t2[e2], i2 ? t2[e2] = r2 : Et(t2, e2, r2)), t2;
  }, qt = g({}.toString), Yt = g("".slice), Gt = function(t2) {
    return Yt(qt(t2), 8, -1);
  }, Ut = V("toStringTag"), Kt = o.Object, Jt = "Arguments" == Gt(function() {
    return arguments;
  }()), Qt = X ? Gt : function(t2) {
    var e2, r2, n2;
    return void 0 === t2 ? "Undefined" : null === t2 ? "Null" : "string" == typeof (r2 = function(t3, e3) {
      try {
        return t3[e3];
      } catch (t4) {
      }
    }(e2 = Kt(t2), Ut)) ? r2 : Jt ? Gt(e2) : "Object" == (n2 = Gt(e2)) && T(e2.callee) ? "Arguments" : n2;
  }, Zt = X ? {}.toString : function() {
    return "[object " + Qt(this) + "]";
  };
  X || Ht(Object.prototype, "toString", Zt, { unsafe: true });
  var te = { CSSRuleList: 0, CSSStyleDeclaration: 0, CSSValueList: 0, ClientRectList: 0, DOMRectList: 0, DOMStringList: 0, DOMTokenList: 1, DataTransferItemList: 0, FileList: 0, HTMLAllCollection: 0, HTMLCollection: 0, HTMLFormElement: 0, HTMLSelectElement: 0, MediaList: 0, MimeTypeArray: 0, NamedNodeMap: 0, NodeList: 1, PaintRequestList: 0, Plugin: 0, PluginArray: 0, SVGLengthList: 0, SVGNumberList: 0, SVGPathSegList: 0, SVGPointList: 0, SVGStringList: 0, SVGTransformList: 0, SourceBufferList: 0, StyleSheetList: 0, TextTrackCueList: 0, TextTrackList: 0, TouchList: 0 }, ee = U("span").classList, re = ee && ee.constructor && ee.constructor.prototype, ne = re === Object.prototype ? void 0 : re, ie = g(g.bind), oe = function(t2, e2) {
    return lt(t2), void 0 === e2 ? t2 : f ? ie(t2, e2) : function() {
      return t2.apply(e2, arguments);
    };
  }, se = o.Object, ae = g("".split), ce = u(function() {
    return !se("z").propertyIsEnumerable(0);
  }) ? function(t2) {
    return "String" == Gt(t2) ? ae(t2, "") : se(t2);
  } : se, le = Math.ceil, ue = Math.floor, fe = Math.trunc || function(t2) {
    var e2 = +t2;
    return (e2 > 0 ? ue : le)(e2);
  }, he = function(t2) {
    var e2 = +t2;
    return e2 != e2 || 0 === e2 ? 0 : fe(e2);
  }, de = Math.min, pe = function(t2) {
    return t2 > 0 ? de(he(t2), 9007199254740991) : 0;
  }, ve = function(t2) {
    return pe(t2.length);
  }, ge = Array.isArray || function(t2) {
    return "Array" == Gt(t2);
  }, be = function() {
  }, ye = [], me = R("Reflect", "construct"), xe = /^\s*(?:class|function)\b/, Ee = g(xe.exec), we = !xe.exec(be), Oe = function(t2) {
    if (!T(t2))
      return false;
    try {
      return me(be, ye, t2), true;
    } catch (t3) {
      return false;
    }
  }, Se = function(t2) {
    if (!T(t2))
      return false;
    switch (Qt(t2)) {
      case "AsyncFunction":
      case "GeneratorFunction":
      case "AsyncGeneratorFunction":
        return false;
    }
    try {
      return we || !!Ee(xe, _t(t2));
    } catch (t3) {
      return true;
    }
  };
  Se.sham = true;
  var Ae = !me || u(function() {
    var t2;
    return Oe(Oe.call) || !Oe(Object) || !Oe(function() {
      t2 = true;
    }) || t2;
  }) ? Se : Oe, ke = V("species"), Te = o.Array, Le = function(t2, e2) {
    return new (function(t3) {
      var e3;
      return ge(t3) && (e3 = t3.constructor, (Ae(e3) && (e3 === Te || ge(e3.prototype)) || q(e3) && null === (e3 = e3[ke])) && (e3 = void 0)), void 0 === e3 ? Te : e3;
    }(t2))(0 === e2 ? 0 : e2);
  }, Re = g([].push), _e = function(t2) {
    var e2 = 1 == t2, r2 = 2 == t2, n2 = 3 == t2, i2 = 4 == t2, o2 = 6 == t2, s2 = 7 == t2, a2 = 5 == t2 || o2;
    return function(c2, l2, u2, f2) {
      for (var h2, d2, p2 = x(c2), v2 = ce(p2), g2 = oe(l2, u2), b2 = ve(v2), y2 = 0, m2 = f2 || Le, E2 = e2 ? m2(c2, b2) : r2 || s2 ? m2(c2, 0) : void 0; b2 > y2; y2++)
        if ((a2 || y2 in v2) && (d2 = g2(h2 = v2[y2], y2, p2), t2))
          if (e2)
            E2[y2] = d2;
          else if (d2)
            switch (t2) {
              case 3:
                return true;
              case 5:
                return h2;
              case 6:
                return y2;
              case 2:
                Re(E2, h2);
            }
          else
            switch (t2) {
              case 4:
                return false;
              case 7:
                Re(E2, h2);
            }
      return o2 ? -1 : n2 || i2 ? i2 : E2;
    };
  }, je = { forEach: _e(0), map: _e(1), filter: _e(2), some: _e(3), every: _e(4), find: _e(5), findIndex: _e(6), filterReject: _e(7) }, ze = function(t2, e2) {
    var r2 = [][t2];
    return !!r2 && u(function() {
      r2.call(null, e2 || function() {
        return 1;
      }, 1);
    });
  }, Me = je.forEach, Ce = ze("forEach") ? [].forEach : function(t2) {
    return Me(this, t2, arguments.length > 1 ? arguments[1] : void 0);
  }, Ne = function(t2) {
    if (t2 && t2.forEach !== Ce)
      try {
        Et(t2, "forEach", Ce);
      } catch (e2) {
        t2.forEach = Ce;
      }
  };
  for (var We in te)
    te[We] && Ne(o[We] && o[We].prototype);
  Ne(ne);
  var Ie = !("undefined" == typeof window || !window.document || !window.document.createElement), Pe = {}.propertyIsEnumerable, Be = Object.getOwnPropertyDescriptor, De = { f: Be && !Pe.call({ 1: 2 }, 1) ? function(t2) {
    var e2 = Be(this, t2);
    return !!e2 && e2.enumerable;
  } : Pe }, Fe = function(t2) {
    return ce(y(t2));
  }, Ve = Object.getOwnPropertyDescriptor, $e = { f: H ? Ve : function(t2, e2) {
    if (t2 = Fe(t2), e2 = vt(e2), K)
      try {
        return Ve(t2, e2);
      } catch (t3) {
      }
    if (w(t2, e2))
      return xt(!rt(De.f, t2, e2), t2[e2]);
  } }, Xe = Math.max, He = Math.min, qe = function(t2, e2) {
    var r2 = he(t2);
    return r2 < 0 ? Xe(r2 + e2, 0) : He(r2, e2);
  }, Ye = function(t2) {
    return function(e2, r2, n2) {
      var i2, o2 = Fe(e2), s2 = ve(o2), a2 = qe(n2, s2);
      if (t2 && r2 != r2) {
        for (; s2 > a2; )
          if ((i2 = o2[a2++]) != i2)
            return true;
      } else
        for (; s2 > a2; a2++)
          if ((t2 || a2 in o2) && o2[a2] === r2)
            return t2 || a2 || 0;
      return !t2 && -1;
    };
  }, Ge = { includes: Ye(true), indexOf: Ye(false) }.indexOf, Ue = g([].push), Ke = function(t2, e2) {
    var r2, n2 = Fe(t2), i2 = 0, o2 = [];
    for (r2 in n2)
      !w(Nt, r2) && w(n2, r2) && Ue(o2, r2);
    for (; e2.length > i2; )
      w(n2, r2 = e2[i2++]) && (~Ge(o2, r2) || Ue(o2, r2));
    return o2;
  }, Je = ["constructor", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "toLocaleString", "toString", "valueOf"], Qe = Je.concat("length", "prototype"), Ze = { f: Object.getOwnPropertyNames || function(t2) {
    return Ke(t2, Qe);
  } }, tr = { f: Object.getOwnPropertySymbols }, er = g([].concat), rr = R("Reflect", "ownKeys") || function(t2) {
    var e2 = Ze.f(tt(t2)), r2 = tr.f;
    return r2 ? er(e2, r2(t2)) : e2;
  }, nr = function(t2, e2, r2) {
    for (var n2 = rr(e2), i2 = mt.f, o2 = $e.f, s2 = 0; s2 < n2.length; s2++) {
      var a2 = n2[s2];
      w(t2, a2) || r2 && w(r2, a2) || i2(t2, a2, o2(e2, a2));
    }
  }, ir = /#|\.prototype\./, or = function(t2, e2) {
    var r2 = ar[sr(t2)];
    return r2 == lr || r2 != cr && (T(e2) ? u(e2) : !!e2);
  }, sr = or.normalize = function(t2) {
    return String(t2).replace(ir, ".").toLowerCase();
  }, ar = or.data = {}, cr = or.NATIVE = "N", lr = or.POLYFILL = "P", ur = or, fr = $e.f, hr = function(t2, e2) {
    var r2, n2, i2, s2, c2, l2 = t2.target, u2 = t2.global, f2 = t2.stat;
    if (r2 = u2 ? o : f2 ? o[l2] || a(l2, {}) : (o[l2] || {}).prototype)
      for (n2 in e2) {
        if (s2 = e2[n2], i2 = t2.dontCallGetSet ? (c2 = fr(r2, n2)) && c2.value : r2[n2], !ur(u2 ? n2 : l2 + (f2 ? "." : "#") + n2, t2.forced) && void 0 !== i2) {
          if (typeof s2 == typeof i2)
            continue;
          nr(s2, i2);
        }
        (t2.sham || i2 && i2.sham) && Et(s2, "sham", true), Ht(r2, n2, s2, t2);
      }
  }, dr = o.String, pr = function(t2) {
    if ("Symbol" === Qt(t2))
      throw TypeError("Cannot convert a Symbol value to a string");
    return dr(t2);
  }, vr = "	\n\v\f\r                　\u2028\u2029\uFEFF", gr = g("".replace), br = "[" + vr + "]", yr = RegExp("^" + br + br + "*"), mr = RegExp(br + br + "*$"), xr = function(t2) {
    return function(e2) {
      var r2 = pr(y(e2));
      return 1 & t2 && (r2 = gr(r2, yr, "")), 2 & t2 && (r2 = gr(r2, mr, "")), r2;
    };
  }, Er = { start: xr(1), end: xr(2), trim: xr(3) }.trim, wr = o.parseInt, Or = o.Symbol, Sr = Or && Or.iterator, Ar = /^[+-]?0x/i, kr = g(Ar.exec), Tr = 8 !== wr(vr + "08") || 22 !== wr(vr + "0x16") || Sr && !u(function() {
    wr(Object(Sr));
  }) ? function(t2, e2) {
    var r2 = Er(pr(t2));
    return wr(r2, e2 >>> 0 || (kr(Ar, r2) ? 16 : 10));
  } : wr;
  hr({ global: true, forced: parseInt != Tr }, { parseInt: Tr });
  var Lr = Object.keys || function(t2) {
    return Ke(t2, Je);
  }, Rr = Object.assign, _r = Object.defineProperty, jr = g([].concat), zr = !Rr || u(function() {
    if (H && 1 !== Rr({ b: 1 }, Rr(_r({}, "a", { enumerable: true, get: function() {
      _r(this, "b", { value: 3, enumerable: false });
    } }), { b: 2 })).b)
      return true;
    var t2 = {}, e2 = {}, r2 = Symbol();
    return t2[r2] = 7, "abcdefghijklmnopqrst".split("").forEach(function(t3) {
      e2[t3] = t3;
    }), 7 != Rr({}, t2)[r2] || "abcdefghijklmnopqrst" != Lr(Rr({}, e2)).join("");
  }) ? function(t2, e2) {
    for (var r2 = x(t2), n2 = arguments.length, i2 = 1, o2 = tr.f, s2 = De.f; n2 > i2; )
      for (var a2, c2 = ce(arguments[i2++]), l2 = o2 ? jr(Lr(c2), o2(c2)) : Lr(c2), u2 = l2.length, f2 = 0; u2 > f2; )
        a2 = l2[f2++], H && !rt(s2, c2, a2) || (r2[a2] = c2[a2]);
    return r2;
  } : Rr;
  hr({ target: "Object", stat: true, arity: 2, forced: Object.assign !== zr }, { assign: zr });
  var Mr, Cr = V("species"), Nr = je.filter, Wr = (Mr = "filter", N >= 51 || !u(function() {
    var t2 = [];
    return (t2.constructor = {})[Cr] = function() {
      return { foo: 1 };
    }, 1 !== t2[Mr](Boolean).foo;
  }));
  hr({ target: "Array", proto: true, forced: !Wr }, { filter: function(t2) {
    return Nr(this, t2, arguments.length > 1 ? arguments[1] : void 0);
  } });
  var Ir, Pr = { f: H && !J ? Object.defineProperties : function(t2, e2) {
    tt(t2);
    for (var r2, n2 = Fe(e2), i2 = Lr(e2), o2 = i2.length, s2 = 0; o2 > s2; )
      mt.f(t2, r2 = i2[s2++], n2[r2]);
    return t2;
  } }, Br = R("document", "documentElement"), Dr = Ct("IE_PROTO"), Fr = function() {
  }, Vr = function(t2) {
    return "<script>" + t2 + "<\/script>";
  }, $r = function(t2) {
    t2.write(Vr("")), t2.close();
    var e2 = t2.parentWindow.Object;
    return t2 = null, e2;
  }, Xr = function() {
    try {
      Ir = new ActiveXObject("htmlfile");
    } catch (t3) {
    }
    var t2, e2;
    Xr = "undefined" != typeof document ? document.domain && Ir ? $r(Ir) : ((e2 = U("iframe")).style.display = "none", Br.appendChild(e2), e2.src = String("javascript:"), (t2 = e2.contentWindow.document).open(), t2.write(Vr("document.F=Object")), t2.close(), t2.F) : $r(Ir);
    for (var r2 = Je.length; r2--; )
      delete Xr.prototype[Je[r2]];
    return Xr();
  };
  Nt[Dr] = true;
  var Hr = Object.create || function(t2, e2) {
    var r2;
    return null !== t2 ? (Fr.prototype = tt(t2), r2 = new Fr(), Fr.prototype = null, r2[Dr] = t2) : r2 = Xr(), void 0 === e2 ? r2 : Pr.f(r2, e2);
  }, qr = mt.f, Yr = V("unscopables"), Gr = Array.prototype;
  null == Gr[Yr] && qr(Gr, Yr, { configurable: true, value: Hr(null) });
  var Ur, Kr, Jr, Qr = function(t2) {
    Gr[Yr][t2] = true;
  }, Zr = {}, tn = !u(function() {
    function t2() {
    }
    return t2.prototype.constructor = null, Object.getPrototypeOf(new t2()) !== t2.prototype;
  }), en = Ct("IE_PROTO"), rn = o.Object, nn = rn.prototype, on = tn ? rn.getPrototypeOf : function(t2) {
    var e2 = x(t2);
    if (w(e2, en))
      return e2[en];
    var r2 = e2.constructor;
    return T(r2) && e2 instanceof r2 ? r2.prototype : e2 instanceof rn ? nn : null;
  }, sn = V("iterator"), an = false;
  [].keys && ("next" in (Jr = [].keys()) ? (Kr = on(on(Jr))) !== Object.prototype && (Ur = Kr) : an = true), (null == Ur || u(function() {
    var t2 = {};
    return Ur[sn].call(t2) !== t2;
  })) && (Ur = {}), T(Ur[sn]) || Ht(Ur, sn, function() {
    return this;
  });
  var cn = { IteratorPrototype: Ur, BUGGY_SAFARI_ITERATORS: an }, ln = mt.f, un = V("toStringTag"), fn = function(t2, e2, r2) {
    t2 && !r2 && (t2 = t2.prototype), t2 && !w(t2, un) && ln(t2, un, { configurable: true, value: e2 });
  }, hn = cn.IteratorPrototype, dn = function() {
    return this;
  }, pn = o.String, vn = o.TypeError, gn = Object.setPrototypeOf || ("__proto__" in {} ? function() {
    var t2, e2 = false, r2 = {};
    try {
      (t2 = g(Object.getOwnPropertyDescriptor(Object.prototype, "__proto__").set))(r2, []), e2 = r2 instanceof Array;
    } catch (t3) {
    }
    return function(r3, n2) {
      return tt(r3), function(t3) {
        if ("object" == typeof t3 || T(t3))
          return t3;
        throw vn("Can't set " + pn(t3) + " as a prototype");
      }(n2), e2 ? t2(r3, n2) : r3.__proto__ = n2, r3;
    };
  }() : void 0), bn = At.PROPER, yn = At.CONFIGURABLE, mn = cn.IteratorPrototype, xn = cn.BUGGY_SAFARI_ITERATORS, En = V("iterator"), wn = function() {
    return this;
  }, On = function(t2, e2, r2, n2, i2, o2, s2) {
    !function(t3, e3, r3, n3) {
      var i3 = e3 + " Iterator";
      t3.prototype = Hr(hn, { next: xt(+!n3, r3) }), fn(t3, i3, false), Zr[i3] = dn;
    }(r2, e2, n2);
    var a2, c2, l2, u2 = function(t3) {
      if (t3 === i2 && v2)
        return v2;
      if (!xn && t3 in d2)
        return d2[t3];
      switch (t3) {
        case "keys":
        case "values":
        case "entries":
          return function() {
            return new r2(this, t3);
          };
      }
      return function() {
        return new r2(this);
      };
    }, f2 = e2 + " Iterator", h2 = false, d2 = t2.prototype, p2 = d2[En] || d2["@@iterator"] || i2 && d2[i2], v2 = !xn && p2 || u2(i2), g2 = "Array" == e2 && d2.entries || p2;
    if (g2 && (a2 = on(g2.call(new t2()))) !== Object.prototype && a2.next && (on(a2) !== mn && (gn ? gn(a2, mn) : T(a2[En]) || Ht(a2, En, wn)), fn(a2, f2, true)), bn && "values" == i2 && p2 && "values" !== p2.name && (yn ? Et(d2, "name", "values") : (h2 = true, v2 = function() {
      return rt(p2, this);
    })), i2)
      if (c2 = { values: u2("values"), keys: o2 ? v2 : u2("keys"), entries: u2("entries") }, s2)
        for (l2 in c2)
          (xn || h2 || !(l2 in d2)) && Ht(d2, l2, c2[l2]);
      else
        hr({ target: e2, proto: true, forced: xn || h2 }, c2);
    return d2[En] !== v2 && Ht(d2, En, v2, { name: i2 }), Zr[e2] = v2, c2;
  }, Sn = mt.f, An = $t.set, kn = $t.getterFor("Array Iterator"), Tn = On(Array, "Array", function(t2, e2) {
    An(this, { type: "Array Iterator", target: Fe(t2), index: 0, kind: e2 });
  }, function() {
    var t2 = kn(this), e2 = t2.target, r2 = t2.kind, n2 = t2.index++;
    return !e2 || n2 >= e2.length ? (t2.target = void 0, { value: void 0, done: true }) : "keys" == r2 ? { value: n2, done: false } : "values" == r2 ? { value: e2[n2], done: false } : { value: [n2, e2[n2]], done: false };
  }, "values"), Ln = Zr.Arguments = Zr.Array;
  if (Qr("keys"), Qr("values"), Qr("entries"), H && "values" !== Ln.name)
    try {
      Sn(Ln, "name", { value: "values" });
    } catch (t2) {
    }
  var Rn = g("".charAt), _n = g("".charCodeAt), jn = g("".slice), zn = function(t2) {
    return function(e2, r2) {
      var n2, i2, o2 = pr(y(e2)), s2 = he(r2), a2 = o2.length;
      return s2 < 0 || s2 >= a2 ? t2 ? "" : void 0 : (n2 = _n(o2, s2)) < 55296 || n2 > 56319 || s2 + 1 === a2 || (i2 = _n(o2, s2 + 1)) < 56320 || i2 > 57343 ? t2 ? Rn(o2, s2) : n2 : t2 ? jn(o2, s2, s2 + 2) : i2 - 56320 + (n2 - 55296 << 10) + 65536;
    };
  }, Mn = { codeAt: zn(false), charAt: zn(true) }, Cn = Mn.charAt, Nn = $t.set, Wn = $t.getterFor("String Iterator");
  On(String, "String", function(t2) {
    Nn(this, { type: "String Iterator", string: pr(t2), index: 0 });
  }, function() {
    var t2, e2 = Wn(this), r2 = e2.string, n2 = e2.index;
    return n2 >= r2.length ? { value: void 0, done: true } : (t2 = Cn(r2, n2), e2.index += t2.length, { value: t2, done: false });
  });
  var In = function(t2, e2, r2) {
    for (var n2 in e2)
      Ht(t2, n2, e2[n2], r2);
    return t2;
  }, Pn = o.Array, Bn = Math.max, Dn = Ze.f, Fn = "object" == typeof window && window && Object.getOwnPropertyNames ? Object.getOwnPropertyNames(window) : [], Vn = function(t2) {
    try {
      return Dn(t2);
    } catch (t3) {
      return function(t4, e2, r2) {
        for (var n2, i2, o2, s2, a2 = ve(t4), c2 = qe(e2, a2), l2 = qe(void 0 === r2 ? a2 : r2, a2), u2 = Pn(Bn(l2 - c2, 0)), f2 = 0; c2 < l2; c2++, f2++)
          n2 = u2, i2 = f2, o2 = t4[c2], s2 = void 0, (s2 = vt(i2)) in n2 ? mt.f(n2, s2, xt(0, o2)) : n2[s2] = o2;
        return u2.length = f2, u2;
      }(Fn);
    }
  }, $n = { f: function(t2) {
    return Fn && "Window" == Gt(t2) ? Vn(t2) : Dn(Fe(t2));
  } }, Xn = u(function() {
    if ("function" == typeof ArrayBuffer) {
      var t2 = new ArrayBuffer(8);
      Object.isExtensible(t2) && Object.defineProperty(t2, "a", { value: 8 });
    }
  }), Hn = Object.isExtensible, qn = u(function() {
    Hn(1);
  }) || Xn ? function(t2) {
    return !!q(t2) && ((!Xn || "ArrayBuffer" != Gt(t2)) && (!Hn || Hn(t2)));
  } : Hn, Yn = !u(function() {
    return Object.isExtensible(Object.preventExtensions({}));
  }), Gn = e(function(t2) {
    var e2 = mt.f, r2 = false, n2 = k("meta"), i2 = 0, o2 = function(t3) {
      e2(t3, n2, { value: { objectID: "O" + i2++, weakData: {} } });
    }, s2 = t2.exports = { enable: function() {
      s2.enable = function() {
      }, r2 = true;
      var t3 = Ze.f, e3 = g([].splice), i3 = {};
      i3[n2] = 1, t3(i3).length && (Ze.f = function(r3) {
        for (var i4 = t3(r3), o3 = 0, s3 = i4.length; o3 < s3; o3++)
          if (i4[o3] === n2) {
            e3(i4, o3, 1);
            break;
          }
        return i4;
      }, hr({ target: "Object", stat: true, forced: true }, { getOwnPropertyNames: $n.f }));
    }, fastKey: function(t3, e3) {
      if (!q(t3))
        return "symbol" == typeof t3 ? t3 : ("string" == typeof t3 ? "S" : "P") + t3;
      if (!w(t3, n2)) {
        if (!qn(t3))
          return "F";
        if (!e3)
          return "E";
        o2(t3);
      }
      return t3[n2].objectID;
    }, getWeakData: function(t3, e3) {
      if (!w(t3, n2)) {
        if (!qn(t3))
          return true;
        if (!e3)
          return false;
        o2(t3);
      }
      return t3[n2].weakData;
    }, onFreeze: function(t3) {
      return Yn && r2 && qn(t3) && !w(t3, n2) && o2(t3), t3;
    } };
    Nt[n2] = true;
  }), Un = (Gn.enable, Gn.fastKey, Gn.getWeakData, Gn.onFreeze, V("iterator")), Kn = Array.prototype, Jn = V("iterator"), Qn = function(t2) {
    if (null != t2)
      return ut(t2, Jn) || ut(t2, "@@iterator") || Zr[Qt(t2)];
  }, Zn = o.TypeError, ti = function(t2, e2, r2) {
    var n2, i2;
    tt(t2);
    try {
      if (!(n2 = ut(t2, "return"))) {
        if ("throw" === e2)
          throw r2;
        return r2;
      }
      n2 = rt(n2, t2);
    } catch (t3) {
      i2 = true, n2 = t3;
    }
    if ("throw" === e2)
      throw r2;
    if (i2)
      throw n2;
    return tt(n2), r2;
  }, ei = o.TypeError, ri = function(t2, e2) {
    this.stopped = t2, this.result = e2;
  }, ni = ri.prototype, ii = function(t2, e2, r2) {
    var n2, i2, o2, s2, a2, c2, l2, u2, f2 = r2 && r2.that, h2 = !(!r2 || !r2.AS_ENTRIES), d2 = !(!r2 || !r2.IS_ITERATOR), p2 = !(!r2 || !r2.INTERRUPTED), v2 = oe(e2, f2), g2 = function(t3) {
      return n2 && ti(n2, "normal", t3), new ri(true, t3);
    }, b2 = function(t3) {
      return h2 ? (tt(t3), p2 ? v2(t3[0], t3[1], g2) : v2(t3[0], t3[1])) : p2 ? v2(t3, g2) : v2(t3);
    };
    if (d2)
      n2 = t2;
    else {
      if (!(i2 = Qn(t2)))
        throw ei(at(t2) + " is not iterable");
      if (void 0 !== (u2 = i2) && (Zr.Array === u2 || Kn[Un] === u2)) {
        for (o2 = 0, s2 = ve(t2); s2 > o2; o2++)
          if ((a2 = b2(t2[o2])) && nt(ni, a2))
            return a2;
        return new ri(false);
      }
      n2 = function(t3, e3) {
        var r3 = arguments.length < 2 ? Qn(t3) : e3;
        if (lt(r3))
          return tt(rt(r3, t3));
        throw Zn(at(t3) + " is not iterable");
      }(t2, i2);
    }
    for (c2 = n2.next; !(l2 = rt(c2, n2)).done; ) {
      try {
        a2 = b2(l2.value);
      } catch (t3) {
        ti(n2, "throw", t3);
      }
      if ("object" == typeof a2 && a2 && nt(ni, a2))
        return a2;
    }
    return new ri(false);
  }, oi = o.TypeError, si = function(t2, e2) {
    if (nt(e2, t2))
      return t2;
    throw oi("Incorrect invocation");
  }, ai = V("iterator"), ci = false;
  try {
    var li = 0, ui = { next: function() {
      return { done: !!li++ };
    }, return: function() {
      ci = true;
    } };
    ui[ai] = function() {
      return this;
    }, Array.from(ui, function() {
      throw 2;
    });
  } catch (t2) {
  }
  var fi = Gn.getWeakData, hi = $t.set, di = $t.getterFor, pi = je.find, vi = je.findIndex, gi = g([].splice), bi = 0, yi = function(t2) {
    return t2.frozen || (t2.frozen = new mi());
  }, mi = function() {
    this.entries = [];
  }, xi = function(t2, e2) {
    return pi(t2.entries, function(t3) {
      return t3[0] === e2;
    });
  };
  mi.prototype = { get: function(t2) {
    var e2 = xi(this, t2);
    if (e2)
      return e2[1];
  }, has: function(t2) {
    return !!xi(this, t2);
  }, set: function(t2, e2) {
    var r2 = xi(this, t2);
    r2 ? r2[1] = e2 : this.entries.push([t2, e2]);
  }, delete: function(t2) {
    var e2 = vi(this.entries, function(e3) {
      return e3[0] === t2;
    });
    return ~e2 && gi(this.entries, e2, 1), !!~e2;
  } };
  var Ei, wi = { getConstructor: function(t2, e2, r2, n2) {
    var i2 = t2(function(t3, i3) {
      si(t3, o2), hi(t3, { type: e2, id: bi++, frozen: void 0 }), null != i3 && ii(i3, t3[n2], { that: t3, AS_ENTRIES: r2 });
    }), o2 = i2.prototype, s2 = di(e2), a2 = function(t3, e3, r3) {
      var n3 = s2(t3), i3 = fi(tt(e3), true);
      return true === i3 ? yi(n3).set(e3, r3) : i3[n3.id] = r3, t3;
    };
    return In(o2, { delete: function(t3) {
      var e3 = s2(this);
      if (!q(t3))
        return false;
      var r3 = fi(t3);
      return true === r3 ? yi(e3).delete(t3) : r3 && w(r3, e3.id) && delete r3[e3.id];
    }, has: function(t3) {
      var e3 = s2(this);
      if (!q(t3))
        return false;
      var r3 = fi(t3);
      return true === r3 ? yi(e3).has(t3) : r3 && w(r3, e3.id);
    } }), In(o2, r2 ? { get: function(t3) {
      var e3 = s2(this);
      if (q(t3)) {
        var r3 = fi(t3);
        return true === r3 ? yi(e3).get(t3) : r3 ? r3[e3.id] : void 0;
      }
    }, set: function(t3, e3) {
      return a2(this, t3, e3);
    } } : { add: function(t3) {
      return a2(this, t3, true);
    } }), i2;
  } }, Oi = $t.enforce, Si = !o.ActiveXObject && "ActiveXObject" in o, Ai = function(t2) {
    return function() {
      return t2(this, arguments.length ? arguments[0] : void 0);
    };
  }, ki = function(t2, e2, r2) {
    var n2 = -1 !== t2.indexOf("Map"), i2 = -1 !== t2.indexOf("Weak"), s2 = n2 ? "set" : "add", a2 = o[t2], c2 = a2 && a2.prototype, l2 = a2, f2 = {}, h2 = function(t3) {
      var e3 = g(c2[t3]);
      Ht(c2, t3, "add" == t3 ? function(t4) {
        return e3(this, 0 === t4 ? 0 : t4), this;
      } : "delete" == t3 ? function(t4) {
        return !(i2 && !q(t4)) && e3(this, 0 === t4 ? 0 : t4);
      } : "get" == t3 ? function(t4) {
        return i2 && !q(t4) ? void 0 : e3(this, 0 === t4 ? 0 : t4);
      } : "has" == t3 ? function(t4) {
        return !(i2 && !q(t4)) && e3(this, 0 === t4 ? 0 : t4);
      } : function(t4, r3) {
        return e3(this, 0 === t4 ? 0 : t4, r3), this;
      });
    };
    if (ur(t2, !T(a2) || !(i2 || c2.forEach && !u(function() {
      new a2().entries().next();
    }))))
      l2 = r2.getConstructor(e2, t2, n2, s2), Gn.enable();
    else if (ur(t2, true)) {
      var d2 = new l2(), p2 = d2[s2](i2 ? {} : -0, 1) != d2, v2 = u(function() {
        d2.has(1);
      }), b2 = function(t3, e3) {
        if (!e3 && !ci)
          return false;
        var r3 = false;
        try {
          var n3 = {};
          n3[ai] = function() {
            return { next: function() {
              return { done: r3 = true };
            } };
          }, t3(n3);
        } catch (t4) {
        }
        return r3;
      }(function(t3) {
        new a2(t3);
      }), y2 = !i2 && u(function() {
        for (var t3 = new a2(), e3 = 5; e3--; )
          t3[s2](e3, e3);
        return !t3.has(-0);
      });
      b2 || ((l2 = e2(function(t3, e3) {
        si(t3, c2);
        var r3 = function(t4, e4, r4) {
          var n3, i3;
          return gn && T(n3 = e4.constructor) && n3 !== r4 && q(i3 = n3.prototype) && i3 !== r4.prototype && gn(t4, i3), t4;
        }(new a2(), t3, l2);
        return null != e3 && ii(e3, r3[s2], { that: r3, AS_ENTRIES: n2 }), r3;
      })).prototype = c2, c2.constructor = l2), (v2 || y2) && (h2("delete"), h2("has"), n2 && h2("get")), (y2 || p2) && h2(s2), i2 && c2.clear && delete c2.clear;
    }
    return f2[t2] = l2, hr({ global: true, constructor: true, forced: l2 != a2 }, f2), fn(l2, t2), i2 || r2.setStrong(l2, t2, n2), l2;
  }("WeakMap", Ai, wi);
  if (zt && Si) {
    Ei = wi.getConstructor(Ai, "WeakMap", true), Gn.enable();
    var Ti = ki.prototype, Li = g(Ti.delete), Ri = g(Ti.has), _i = g(Ti.get), ji = g(Ti.set);
    In(Ti, { delete: function(t2) {
      if (q(t2) && !qn(t2)) {
        var e2 = Oi(this);
        return e2.frozen || (e2.frozen = new Ei()), Li(this, t2) || e2.frozen.delete(t2);
      }
      return Li(this, t2);
    }, has: function(t2) {
      if (q(t2) && !qn(t2)) {
        var e2 = Oi(this);
        return e2.frozen || (e2.frozen = new Ei()), Ri(this, t2) || e2.frozen.has(t2);
      }
      return Ri(this, t2);
    }, get: function(t2) {
      if (q(t2) && !qn(t2)) {
        var e2 = Oi(this);
        return e2.frozen || (e2.frozen = new Ei()), Ri(this, t2) ? _i(this, t2) : e2.frozen.get(t2);
      }
      return _i(this, t2);
    }, set: function(t2, e2) {
      if (q(t2) && !qn(t2)) {
        var r2 = Oi(this);
        r2.frozen || (r2.frozen = new Ei()), Ri(this, t2) ? ji(this, t2, e2) : r2.frozen.set(t2, e2);
      } else
        ji(this, t2, e2);
      return this;
    } });
  }
  var zi = V("iterator"), Mi = V("toStringTag"), Ci = Tn.values, Ni = function(t2, e2) {
    if (t2) {
      if (t2[zi] !== Ci)
        try {
          Et(t2, zi, Ci);
        } catch (e3) {
          t2[zi] = Ci;
        }
      if (t2[Mi] || Et(t2, Mi, e2), te[e2]) {
        for (var r2 in Tn)
          if (t2[r2] !== Tn[r2])
            try {
              Et(t2, r2, Tn[r2]);
            } catch (e3) {
              t2[r2] = Tn[r2];
            }
      }
    }
  };
  for (var Wi in te)
    Ni(o[Wi] && o[Wi].prototype, Wi);
  Ni(ne, "DOMTokenList");
  var Ii = /^\s+|\s+$/g, Pi = /^[-+]0x[0-9a-f]+$/i, Bi = /^0b[01]+$/i, Di = /^0o[0-7]+$/i, Fi = parseInt, Vi = "object" == typeof t && t && t.Object === Object && t, $i = "object" == typeof self && self && self.Object === Object && self, Xi = Vi || $i || Function("return this")(), Hi = Object.prototype.toString, qi = Math.max, Yi = Math.min, Gi = function() {
    return Xi.Date.now();
  };
  function Ui(t2, e2, r2) {
    var n2, i2, o2, s2, a2, c2, l2 = 0, u2 = false, f2 = false, h2 = true;
    if ("function" != typeof t2)
      throw new TypeError("Expected a function");
    function d2(e3) {
      var r3 = n2, o3 = i2;
      return n2 = i2 = void 0, l2 = e3, s2 = t2.apply(o3, r3);
    }
    function p2(t3) {
      return l2 = t3, a2 = setTimeout(g2, e2), u2 ? d2(t3) : s2;
    }
    function v2(t3) {
      var r3 = t3 - c2;
      return void 0 === c2 || r3 >= e2 || r3 < 0 || f2 && t3 - l2 >= o2;
    }
    function g2() {
      var t3 = Gi();
      if (v2(t3))
        return b2(t3);
      a2 = setTimeout(g2, function(t4) {
        var r3 = e2 - (t4 - c2);
        return f2 ? Yi(r3, o2 - (t4 - l2)) : r3;
      }(t3));
    }
    function b2(t3) {
      return a2 = void 0, h2 && n2 ? d2(t3) : (n2 = i2 = void 0, s2);
    }
    function y2() {
      var t3 = Gi(), r3 = v2(t3);
      if (n2 = arguments, i2 = this, c2 = t3, r3) {
        if (void 0 === a2)
          return p2(c2);
        if (f2)
          return a2 = setTimeout(g2, e2), d2(c2);
      }
      return void 0 === a2 && (a2 = setTimeout(g2, e2)), s2;
    }
    return e2 = Ji(e2) || 0, Ki(r2) && (u2 = !!r2.leading, o2 = (f2 = "maxWait" in r2) ? qi(Ji(r2.maxWait) || 0, e2) : o2, h2 = "trailing" in r2 ? !!r2.trailing : h2), y2.cancel = function() {
      void 0 !== a2 && clearTimeout(a2), l2 = 0, n2 = c2 = i2 = a2 = void 0;
    }, y2.flush = function() {
      return void 0 === a2 ? s2 : b2(Gi());
    }, y2;
  }
  function Ki(t2) {
    var e2 = typeof t2;
    return !!t2 && ("object" == e2 || "function" == e2);
  }
  function Ji(t2) {
    if ("number" == typeof t2)
      return t2;
    if (function(t3) {
      return "symbol" == typeof t3 || function(t4) {
        return !!t4 && "object" == typeof t4;
      }(t3) && "[object Symbol]" == Hi.call(t3);
    }(t2))
      return NaN;
    if (Ki(t2)) {
      var e2 = "function" == typeof t2.valueOf ? t2.valueOf() : t2;
      t2 = Ki(e2) ? e2 + "" : e2;
    }
    if ("string" != typeof t2)
      return 0 === t2 ? t2 : +t2;
    t2 = t2.replace(Ii, "");
    var r2 = Bi.test(t2);
    return r2 || Di.test(t2) ? Fi(t2.slice(2), r2 ? 2 : 8) : Pi.test(t2) ? NaN : +t2;
  }
  var Qi = function(t2, e2, r2) {
    var n2 = true, i2 = true;
    if ("function" != typeof t2)
      throw new TypeError("Expected a function");
    return Ki(r2) && (n2 = "leading" in r2 ? !!r2.leading : n2, i2 = "trailing" in r2 ? !!r2.trailing : i2), Ui(t2, e2, { leading: n2, maxWait: e2, trailing: i2 });
  }, Zi = /^\s+|\s+$/g, to = /^[-+]0x[0-9a-f]+$/i, eo = /^0b[01]+$/i, ro = /^0o[0-7]+$/i, no = parseInt, io = "object" == typeof t && t && t.Object === Object && t, oo = "object" == typeof self && self && self.Object === Object && self, so = io || oo || Function("return this")(), ao = Object.prototype.toString, co = Math.max, lo = Math.min, uo = function() {
    return so.Date.now();
  };
  function fo(t2) {
    var e2 = typeof t2;
    return !!t2 && ("object" == e2 || "function" == e2);
  }
  function ho(t2) {
    if ("number" == typeof t2)
      return t2;
    if (function(t3) {
      return "symbol" == typeof t3 || function(t4) {
        return !!t4 && "object" == typeof t4;
      }(t3) && "[object Symbol]" == ao.call(t3);
    }(t2))
      return NaN;
    if (fo(t2)) {
      var e2 = "function" == typeof t2.valueOf ? t2.valueOf() : t2;
      t2 = fo(e2) ? e2 + "" : e2;
    }
    if ("string" != typeof t2)
      return 0 === t2 ? t2 : +t2;
    t2 = t2.replace(Zi, "");
    var r2 = eo.test(t2);
    return r2 || ro.test(t2) ? no(t2.slice(2), r2 ? 2 : 8) : to.test(t2) ? NaN : +t2;
  }
  var po = function(t2, e2, r2) {
    var n2, i2, o2, s2, a2, c2, l2 = 0, u2 = false, f2 = false, h2 = true;
    if ("function" != typeof t2)
      throw new TypeError("Expected a function");
    function d2(e3) {
      var r3 = n2, o3 = i2;
      return n2 = i2 = void 0, l2 = e3, s2 = t2.apply(o3, r3);
    }
    function p2(t3) {
      return l2 = t3, a2 = setTimeout(g2, e2), u2 ? d2(t3) : s2;
    }
    function v2(t3) {
      var r3 = t3 - c2;
      return void 0 === c2 || r3 >= e2 || r3 < 0 || f2 && t3 - l2 >= o2;
    }
    function g2() {
      var t3 = uo();
      if (v2(t3))
        return b2(t3);
      a2 = setTimeout(g2, function(t4) {
        var r3 = e2 - (t4 - c2);
        return f2 ? lo(r3, o2 - (t4 - l2)) : r3;
      }(t3));
    }
    function b2(t3) {
      return a2 = void 0, h2 && n2 ? d2(t3) : (n2 = i2 = void 0, s2);
    }
    function y2() {
      var t3 = uo(), r3 = v2(t3);
      if (n2 = arguments, i2 = this, c2 = t3, r3) {
        if (void 0 === a2)
          return p2(c2);
        if (f2)
          return a2 = setTimeout(g2, e2), d2(c2);
      }
      return void 0 === a2 && (a2 = setTimeout(g2, e2)), s2;
    }
    return e2 = ho(e2) || 0, fo(r2) && (u2 = !!r2.leading, o2 = (f2 = "maxWait" in r2) ? co(ho(r2.maxWait) || 0, e2) : o2, h2 = "trailing" in r2 ? !!r2.trailing : h2), y2.cancel = function() {
      void 0 !== a2 && clearTimeout(a2), l2 = 0, n2 = c2 = i2 = a2 = void 0;
    }, y2.flush = function() {
      return void 0 === a2 ? s2 : b2(uo());
    }, y2;
  }, vo = /^\[object .+?Constructor\]$/, go = "object" == typeof t && t && t.Object === Object && t, bo = "object" == typeof self && self && self.Object === Object && self, yo = go || bo || Function("return this")();
  var mo = Array.prototype, xo = Function.prototype, Eo = Object.prototype, wo = yo["__core-js_shared__"], Oo = function() {
    var t2 = /[^.]+$/.exec(wo && wo.keys && wo.keys.IE_PROTO || "");
    return t2 ? "Symbol(src)_1." + t2 : "";
  }(), So = xo.toString, Ao = Eo.hasOwnProperty, ko = Eo.toString, To = RegExp("^" + So.call(Ao).replace(/[\\^$.*+?()[\]{}|]/g, "\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g, "$1.*?") + "$"), Lo = mo.splice, Ro = Io(yo, "Map"), _o = Io(Object, "create");
  function jo(t2) {
    var e2 = -1, r2 = t2 ? t2.length : 0;
    for (this.clear(); ++e2 < r2; ) {
      var n2 = t2[e2];
      this.set(n2[0], n2[1]);
    }
  }
  function zo(t2) {
    var e2 = -1, r2 = t2 ? t2.length : 0;
    for (this.clear(); ++e2 < r2; ) {
      var n2 = t2[e2];
      this.set(n2[0], n2[1]);
    }
  }
  function Mo(t2) {
    var e2 = -1, r2 = t2 ? t2.length : 0;
    for (this.clear(); ++e2 < r2; ) {
      var n2 = t2[e2];
      this.set(n2[0], n2[1]);
    }
  }
  function Co(t2, e2) {
    for (var r2, n2, i2 = t2.length; i2--; )
      if ((r2 = t2[i2][0]) === (n2 = e2) || r2 != r2 && n2 != n2)
        return i2;
    return -1;
  }
  function No(t2) {
    return !(!Bo(t2) || (e2 = t2, Oo && Oo in e2)) && (function(t3) {
      var e3 = Bo(t3) ? ko.call(t3) : "";
      return "[object Function]" == e3 || "[object GeneratorFunction]" == e3;
    }(t2) || function(t3) {
      var e3 = false;
      if (null != t3 && "function" != typeof t3.toString)
        try {
          e3 = !!(t3 + "");
        } catch (t4) {
        }
      return e3;
    }(t2) ? To : vo).test(function(t3) {
      if (null != t3) {
        try {
          return So.call(t3);
        } catch (t4) {
        }
        try {
          return t3 + "";
        } catch (t4) {
        }
      }
      return "";
    }(t2));
    var e2;
  }
  function Wo(t2, e2) {
    var r2, n2, i2 = t2.__data__;
    return ("string" == (n2 = typeof (r2 = e2)) || "number" == n2 || "symbol" == n2 || "boolean" == n2 ? "__proto__" !== r2 : null === r2) ? i2["string" == typeof e2 ? "string" : "hash"] : i2.map;
  }
  function Io(t2, e2) {
    var r2 = function(t3, e3) {
      return null == t3 ? void 0 : t3[e3];
    }(t2, e2);
    return No(r2) ? r2 : void 0;
  }
  function Po(t2, e2) {
    if ("function" != typeof t2 || e2 && "function" != typeof e2)
      throw new TypeError("Expected a function");
    var r2 = function() {
      var n2 = arguments, i2 = e2 ? e2.apply(this, n2) : n2[0], o2 = r2.cache;
      if (o2.has(i2))
        return o2.get(i2);
      var s2 = t2.apply(this, n2);
      return r2.cache = o2.set(i2, s2), s2;
    };
    return r2.cache = new (Po.Cache || Mo)(), r2;
  }
  function Bo(t2) {
    var e2 = typeof t2;
    return !!t2 && ("object" == e2 || "function" == e2);
  }
  jo.prototype.clear = function() {
    this.__data__ = _o ? _o(null) : {};
  }, jo.prototype.delete = function(t2) {
    return this.has(t2) && delete this.__data__[t2];
  }, jo.prototype.get = function(t2) {
    var e2 = this.__data__;
    if (_o) {
      var r2 = e2[t2];
      return "__lodash_hash_undefined__" === r2 ? void 0 : r2;
    }
    return Ao.call(e2, t2) ? e2[t2] : void 0;
  }, jo.prototype.has = function(t2) {
    var e2 = this.__data__;
    return _o ? void 0 !== e2[t2] : Ao.call(e2, t2);
  }, jo.prototype.set = function(t2, e2) {
    return this.__data__[t2] = _o && void 0 === e2 ? "__lodash_hash_undefined__" : e2, this;
  }, zo.prototype.clear = function() {
    this.__data__ = [];
  }, zo.prototype.delete = function(t2) {
    var e2 = this.__data__, r2 = Co(e2, t2);
    return !(r2 < 0) && (r2 == e2.length - 1 ? e2.pop() : Lo.call(e2, r2, 1), true);
  }, zo.prototype.get = function(t2) {
    var e2 = this.__data__, r2 = Co(e2, t2);
    return r2 < 0 ? void 0 : e2[r2][1];
  }, zo.prototype.has = function(t2) {
    return Co(this.__data__, t2) > -1;
  }, zo.prototype.set = function(t2, e2) {
    var r2 = this.__data__, n2 = Co(r2, t2);
    return n2 < 0 ? r2.push([t2, e2]) : r2[n2][1] = e2, this;
  }, Mo.prototype.clear = function() {
    this.__data__ = { hash: new jo(), map: new (Ro || zo)(), string: new jo() };
  }, Mo.prototype.delete = function(t2) {
    return Wo(this, t2).delete(t2);
  }, Mo.prototype.get = function(t2) {
    return Wo(this, t2).get(t2);
  }, Mo.prototype.has = function(t2) {
    return Wo(this, t2).has(t2);
  }, Mo.prototype.set = function(t2, e2) {
    return Wo(this, t2).set(t2, e2), this;
  }, Po.Cache = Mo;
  var Do, Fo = Po, Vo = [], $o = "ResizeObserver loop completed with undelivered notifications.";
  !function(t2) {
    t2.BORDER_BOX = "border-box", t2.CONTENT_BOX = "content-box", t2.DEVICE_PIXEL_CONTENT_BOX = "device-pixel-content-box";
  }(Do || (Do = {}));
  var Xo, Ho = function(t2) {
    return Object.freeze(t2);
  }, qo = function(t2, e2) {
    this.inlineSize = t2, this.blockSize = e2, Ho(this);
  }, Yo = function() {
    function t2(t3, e2, r2, n2) {
      return this.x = t3, this.y = e2, this.width = r2, this.height = n2, this.top = this.y, this.left = this.x, this.bottom = this.top + this.height, this.right = this.left + this.width, Ho(this);
    }
    return t2.prototype.toJSON = function() {
      var t3 = this;
      return { x: t3.x, y: t3.y, top: t3.top, right: t3.right, bottom: t3.bottom, left: t3.left, width: t3.width, height: t3.height };
    }, t2.fromRect = function(e2) {
      return new t2(e2.x, e2.y, e2.width, e2.height);
    }, t2;
  }(), Go = function(t2) {
    return t2 instanceof SVGElement && "getBBox" in t2;
  }, Uo = function(t2) {
    if (Go(t2)) {
      var e2 = t2.getBBox(), r2 = e2.width, n2 = e2.height;
      return !r2 && !n2;
    }
    var i2 = t2, o2 = i2.offsetWidth, s2 = i2.offsetHeight;
    return !(o2 || s2 || t2.getClientRects().length);
  }, Ko = function(t2) {
    var e2, r2;
    if (t2 instanceof Element)
      return true;
    var n2 = null === (r2 = null === (e2 = t2) || void 0 === e2 ? void 0 : e2.ownerDocument) || void 0 === r2 ? void 0 : r2.defaultView;
    return !!(n2 && t2 instanceof n2.Element);
  }, Jo = "undefined" != typeof window ? window : {}, Qo = /* @__PURE__ */ new WeakMap(), Zo = /auto|scroll/, ts = /^tb|vertical/, es = /msie|trident/i.test(Jo.navigator && Jo.navigator.userAgent), rs = function(t2) {
    return parseFloat(t2 || "0");
  }, ns = function(t2, e2, r2) {
    return void 0 === t2 && (t2 = 0), void 0 === e2 && (e2 = 0), void 0 === r2 && (r2 = false), new qo((r2 ? e2 : t2) || 0, (r2 ? t2 : e2) || 0);
  }, is = Ho({ devicePixelContentBoxSize: ns(), borderBoxSize: ns(), contentBoxSize: ns(), contentRect: new Yo(0, 0, 0, 0) }), os = function(t2, e2) {
    if (void 0 === e2 && (e2 = false), Qo.has(t2) && !e2)
      return Qo.get(t2);
    if (Uo(t2))
      return Qo.set(t2, is), is;
    var r2 = getComputedStyle(t2), n2 = Go(t2) && t2.ownerSVGElement && t2.getBBox(), i2 = !es && "border-box" === r2.boxSizing, o2 = ts.test(r2.writingMode || ""), s2 = !n2 && Zo.test(r2.overflowY || ""), a2 = !n2 && Zo.test(r2.overflowX || ""), c2 = n2 ? 0 : rs(r2.paddingTop), l2 = n2 ? 0 : rs(r2.paddingRight), u2 = n2 ? 0 : rs(r2.paddingBottom), f2 = n2 ? 0 : rs(r2.paddingLeft), h2 = n2 ? 0 : rs(r2.borderTopWidth), d2 = n2 ? 0 : rs(r2.borderRightWidth), p2 = n2 ? 0 : rs(r2.borderBottomWidth), v2 = f2 + l2, g2 = c2 + u2, b2 = (n2 ? 0 : rs(r2.borderLeftWidth)) + d2, y2 = h2 + p2, m2 = a2 ? t2.offsetHeight - y2 - t2.clientHeight : 0, x2 = s2 ? t2.offsetWidth - b2 - t2.clientWidth : 0, E2 = i2 ? v2 + b2 : 0, w2 = i2 ? g2 + y2 : 0, O2 = n2 ? n2.width : rs(r2.width) - E2 - x2, S2 = n2 ? n2.height : rs(r2.height) - w2 - m2, A2 = O2 + v2 + x2 + b2, k2 = S2 + g2 + m2 + y2, T2 = Ho({ devicePixelContentBoxSize: ns(Math.round(O2 * devicePixelRatio), Math.round(S2 * devicePixelRatio), o2), borderBoxSize: ns(A2, k2, o2), contentBoxSize: ns(O2, S2, o2), contentRect: new Yo(f2, c2, O2, S2) });
    return Qo.set(t2, T2), T2;
  }, ss = function(t2, e2, r2) {
    var n2 = os(t2, r2), i2 = n2.borderBoxSize, o2 = n2.contentBoxSize, s2 = n2.devicePixelContentBoxSize;
    switch (e2) {
      case Do.DEVICE_PIXEL_CONTENT_BOX:
        return s2;
      case Do.BORDER_BOX:
        return i2;
      default:
        return o2;
    }
  }, as = function(t2) {
    var e2 = os(t2);
    this.target = t2, this.contentRect = e2.contentRect, this.borderBoxSize = Ho([e2.borderBoxSize]), this.contentBoxSize = Ho([e2.contentBoxSize]), this.devicePixelContentBoxSize = Ho([e2.devicePixelContentBoxSize]);
  }, cs = function(t2) {
    if (Uo(t2))
      return 1 / 0;
    for (var e2 = 0, r2 = t2.parentNode; r2; )
      e2 += 1, r2 = r2.parentNode;
    return e2;
  }, ls = function() {
    var t2 = 1 / 0, e2 = [];
    Vo.forEach(function(r3) {
      if (0 !== r3.activeTargets.length) {
        var n3 = [];
        r3.activeTargets.forEach(function(e3) {
          var r4 = new as(e3.target), i2 = cs(e3.target);
          n3.push(r4), e3.lastReportedSize = ss(e3.target, e3.observedBox), i2 < t2 && (t2 = i2);
        }), e2.push(function() {
          r3.callback.call(r3.observer, n3, r3.observer);
        }), r3.activeTargets.splice(0, r3.activeTargets.length);
      }
    });
    for (var r2 = 0, n2 = e2; r2 < n2.length; r2++) {
      (0, n2[r2])();
    }
    return t2;
  }, us = function(t2) {
    Vo.forEach(function(e2) {
      e2.activeTargets.splice(0, e2.activeTargets.length), e2.skippedTargets.splice(0, e2.skippedTargets.length), e2.observationTargets.forEach(function(r2) {
        r2.isActive() && (cs(r2.target) > t2 ? e2.activeTargets.push(r2) : e2.skippedTargets.push(r2));
      });
    });
  }, fs = function() {
    var t2, e2 = 0;
    for (us(e2); Vo.some(function(t3) {
      return t3.activeTargets.length > 0;
    }); )
      e2 = ls(), us(e2);
    return Vo.some(function(t3) {
      return t3.skippedTargets.length > 0;
    }) && ("function" == typeof ErrorEvent ? t2 = new ErrorEvent("error", { message: $o }) : ((t2 = document.createEvent("Event")).initEvent("error", false, false), t2.message = $o), window.dispatchEvent(t2)), e2 > 0;
  }, hs = [], ds = function(t2) {
    if (!Xo) {
      var e2 = 0, r2 = document.createTextNode("");
      new MutationObserver(function() {
        return hs.splice(0).forEach(function(t3) {
          return t3();
        });
      }).observe(r2, { characterData: true }), Xo = function() {
        r2.textContent = "" + (e2 ? e2-- : e2++);
      };
    }
    hs.push(t2), Xo();
  }, ps = 0, vs = { attributes: true, characterData: true, childList: true, subtree: true }, gs = ["resize", "load", "transitionend", "animationend", "animationstart", "animationiteration", "keyup", "keydown", "mouseup", "mousedown", "mouseover", "mouseout", "blur", "focus"], bs = function(t2) {
    return void 0 === t2 && (t2 = 0), Date.now() + t2;
  }, ys = false, ms = new (function() {
    function t2() {
      var t3 = this;
      this.stopped = true, this.listener = function() {
        return t3.schedule();
      };
    }
    return t2.prototype.run = function(t3) {
      var e2 = this;
      if (void 0 === t3 && (t3 = 250), !ys) {
        ys = true;
        var r2, n2 = bs(t3);
        r2 = function() {
          var r3 = false;
          try {
            r3 = fs();
          } finally {
            if (ys = false, t3 = n2 - bs(), !ps)
              return;
            r3 ? e2.run(1e3) : t3 > 0 ? e2.run(t3) : e2.start();
          }
        }, ds(function() {
          requestAnimationFrame(r2);
        });
      }
    }, t2.prototype.schedule = function() {
      this.stop(), this.run();
    }, t2.prototype.observe = function() {
      var t3 = this, e2 = function() {
        return t3.observer && t3.observer.observe(document.body, vs);
      };
      document.body ? e2() : Jo.addEventListener("DOMContentLoaded", e2);
    }, t2.prototype.start = function() {
      var t3 = this;
      this.stopped && (this.stopped = false, this.observer = new MutationObserver(this.listener), this.observe(), gs.forEach(function(e2) {
        return Jo.addEventListener(e2, t3.listener, true);
      }));
    }, t2.prototype.stop = function() {
      var t3 = this;
      this.stopped || (this.observer && this.observer.disconnect(), gs.forEach(function(e2) {
        return Jo.removeEventListener(e2, t3.listener, true);
      }), this.stopped = true);
    }, t2;
  }())(), xs = function(t2) {
    !ps && t2 > 0 && ms.start(), !(ps += t2) && ms.stop();
  }, Es = function() {
    function t2(t3, e2) {
      this.target = t3, this.observedBox = e2 || Do.CONTENT_BOX, this.lastReportedSize = { inlineSize: 0, blockSize: 0 };
    }
    return t2.prototype.isActive = function() {
      var t3, e2 = ss(this.target, this.observedBox, true);
      return t3 = this.target, Go(t3) || function(t4) {
        switch (t4.tagName) {
          case "INPUT":
            if ("image" !== t4.type)
              break;
          case "VIDEO":
          case "AUDIO":
          case "EMBED":
          case "OBJECT":
          case "CANVAS":
          case "IFRAME":
          case "IMG":
            return true;
        }
        return false;
      }(t3) || "inline" !== getComputedStyle(t3).display || (this.lastReportedSize = e2), this.lastReportedSize.inlineSize !== e2.inlineSize || this.lastReportedSize.blockSize !== e2.blockSize;
    }, t2;
  }(), ws = function(t2, e2) {
    this.activeTargets = [], this.skippedTargets = [], this.observationTargets = [], this.observer = t2, this.callback = e2;
  }, Os = /* @__PURE__ */ new WeakMap(), Ss = function(t2, e2) {
    for (var r2 = 0; r2 < t2.length; r2 += 1)
      if (t2[r2].target === e2)
        return r2;
    return -1;
  }, As = function() {
    function t2() {
    }
    return t2.connect = function(t3, e2) {
      var r2 = new ws(t3, e2);
      Os.set(t3, r2);
    }, t2.observe = function(t3, e2, r2) {
      var n2 = Os.get(t3), i2 = 0 === n2.observationTargets.length;
      Ss(n2.observationTargets, e2) < 0 && (i2 && Vo.push(n2), n2.observationTargets.push(new Es(e2, r2 && r2.box)), xs(1), ms.schedule());
    }, t2.unobserve = function(t3, e2) {
      var r2 = Os.get(t3), n2 = Ss(r2.observationTargets, e2), i2 = 1 === r2.observationTargets.length;
      n2 >= 0 && (i2 && Vo.splice(Vo.indexOf(r2), 1), r2.observationTargets.splice(n2, 1), xs(-1));
    }, t2.disconnect = function(t3) {
      var e2 = this, r2 = Os.get(t3);
      r2.observationTargets.slice().forEach(function(r3) {
        return e2.unobserve(t3, r3.target);
      }), r2.activeTargets.splice(0, r2.activeTargets.length);
    }, t2;
  }(), ks = function() {
    function t2(t3) {
      if (0 === arguments.length)
        throw new TypeError("Failed to construct 'ResizeObserver': 1 argument required, but only 0 present.");
      if ("function" != typeof t3)
        throw new TypeError("Failed to construct 'ResizeObserver': The callback provided as parameter 1 is not a function.");
      As.connect(this, t3);
    }
    return t2.prototype.observe = function(t3, e2) {
      if (0 === arguments.length)
        throw new TypeError("Failed to execute 'observe' on 'ResizeObserver': 1 argument required, but only 0 present.");
      if (!Ko(t3))
        throw new TypeError("Failed to execute 'observe' on 'ResizeObserver': parameter 1 is not of type 'Element");
      As.observe(this, t3, e2);
    }, t2.prototype.unobserve = function(t3) {
      if (0 === arguments.length)
        throw new TypeError("Failed to execute 'unobserve' on 'ResizeObserver': 1 argument required, but only 0 present.");
      if (!Ko(t3))
        throw new TypeError("Failed to execute 'unobserve' on 'ResizeObserver': parameter 1 is not of type 'Element");
      As.unobserve(this, t3);
    }, t2.prototype.disconnect = function() {
      As.disconnect(this);
    }, t2.toString = function() {
      return "function ResizeObserver () { [polyfill code] }";
    }, t2;
  }(), Ts = o.TypeError, Ls = function(t2) {
    return function(e2, r2, n2, i2) {
      lt(r2);
      var o2 = x(e2), s2 = ce(o2), a2 = ve(o2), c2 = t2 ? a2 - 1 : 0, l2 = t2 ? -1 : 1;
      if (n2 < 2)
        for (; ; ) {
          if (c2 in s2) {
            i2 = s2[c2], c2 += l2;
            break;
          }
          if (c2 += l2, t2 ? c2 < 0 : a2 <= c2)
            throw Ts("Reduce of empty array with no initial value");
        }
      for (; t2 ? c2 >= 0 : a2 > c2; c2 += l2)
        c2 in s2 && (i2 = r2(i2, s2[c2], c2, o2));
      return i2;
    };
  }, Rs = { left: Ls(false), right: Ls(true) }, _s = "process" == Gt(o.process), js = Rs.left, zs = ze("reduce");
  hr({ target: "Array", proto: true, forced: !zs || !_s && N > 79 && N < 83 }, { reduce: function(t2) {
    var e2 = arguments.length;
    return js(this, t2, e2, e2 > 1 ? arguments[1] : void 0);
  } });
  var Ms, Cs, Ns = function() {
    var t2 = tt(this), e2 = "";
    return t2.hasIndices && (e2 += "d"), t2.global && (e2 += "g"), t2.ignoreCase && (e2 += "i"), t2.multiline && (e2 += "m"), t2.dotAll && (e2 += "s"), t2.unicode && (e2 += "u"), t2.sticky && (e2 += "y"), e2;
  }, Ws = o.RegExp, Is = u(function() {
    var t2 = Ws("a", "y");
    return t2.lastIndex = 2, null != t2.exec("abcd");
  }), Ps = Is || u(function() {
    return !Ws("a", "y").sticky;
  }), Bs = { BROKEN_CARET: Is || u(function() {
    var t2 = Ws("^r", "gy");
    return t2.lastIndex = 2, null != t2.exec("str");
  }), MISSED_STICKY: Ps, UNSUPPORTED_Y: Is }, Ds = o.RegExp, Fs = u(function() {
    var t2 = Ds(".", "s");
    return !(t2.dotAll && t2.exec("\n") && "s" === t2.flags);
  }), Vs = o.RegExp, $s = u(function() {
    var t2 = Vs("(?<a>b)", "g");
    return "b" !== t2.exec("b").groups.a || "bc" !== "b".replace(t2, "$<a>c");
  }), Xs = $t.get, Hs = l("native-string-replace", String.prototype.replace), qs = RegExp.prototype.exec, Ys = qs, Gs = g("".charAt), Us = g("".indexOf), Ks = g("".replace), Js = g("".slice), Qs = (Cs = /b*/g, rt(qs, Ms = /a/, "a"), rt(qs, Cs, "a"), 0 !== Ms.lastIndex || 0 !== Cs.lastIndex), Zs = Bs.BROKEN_CARET, ta = void 0 !== /()??/.exec("")[1];
  (Qs || ta || Zs || Fs || $s) && (Ys = function(t2) {
    var e2, r2, n2, i2, o2, s2, a2, c2 = this, l2 = Xs(c2), u2 = pr(t2), f2 = l2.raw;
    if (f2)
      return f2.lastIndex = c2.lastIndex, e2 = rt(Ys, f2, u2), c2.lastIndex = f2.lastIndex, e2;
    var h2 = l2.groups, d2 = Zs && c2.sticky, p2 = rt(Ns, c2), v2 = c2.source, g2 = 0, b2 = u2;
    if (d2 && (p2 = Ks(p2, "y", ""), -1 === Us(p2, "g") && (p2 += "g"), b2 = Js(u2, c2.lastIndex), c2.lastIndex > 0 && (!c2.multiline || c2.multiline && "\n" !== Gs(u2, c2.lastIndex - 1)) && (v2 = "(?: " + v2 + ")", b2 = " " + b2, g2++), r2 = new RegExp("^(?:" + v2 + ")", p2)), ta && (r2 = new RegExp("^" + v2 + "$(?!\\s)", p2)), Qs && (n2 = c2.lastIndex), i2 = rt(qs, d2 ? r2 : c2, b2), d2 ? i2 ? (i2.input = Js(i2.input, g2), i2[0] = Js(i2[0], g2), i2.index = c2.lastIndex, c2.lastIndex += i2[0].length) : c2.lastIndex = 0 : Qs && i2 && (c2.lastIndex = c2.global ? i2.index + i2[0].length : n2), ta && i2 && i2.length > 1 && rt(Hs, i2[0], r2, function() {
      for (o2 = 1; o2 < arguments.length - 2; o2++)
        void 0 === arguments[o2] && (i2[o2] = void 0);
    }), i2 && h2)
      for (i2.groups = s2 = Hr(null), o2 = 0; o2 < h2.length; o2++)
        s2[(a2 = h2[o2])[0]] = i2[a2[1]];
    return i2;
  });
  var ea = Ys;
  hr({ target: "RegExp", proto: true, forced: /./.exec !== ea }, { exec: ea });
  var ra = V("species"), na = RegExp.prototype, ia = function(t2, e2, r2, n2) {
    var i2 = V(t2), o2 = !u(function() {
      var e3 = {};
      return e3[i2] = function() {
        return 7;
      }, 7 != ""[t2](e3);
    }), s2 = o2 && !u(function() {
      var e3 = false, r3 = /a/;
      return "split" === t2 && ((r3 = {}).constructor = {}, r3.constructor[ra] = function() {
        return r3;
      }, r3.flags = "", r3[i2] = /./[i2]), r3.exec = function() {
        return e3 = true, null;
      }, r3[i2](""), !e3;
    });
    if (!o2 || !s2 || r2) {
      var a2 = g(/./[i2]), c2 = e2(i2, ""[t2], function(t3, e3, r3, n3, i3) {
        var s3 = g(t3), c3 = e3.exec;
        return c3 === ea || c3 === na.exec ? o2 && !i3 ? { done: true, value: a2(e3, r3, n3) } : { done: true, value: s3(r3, e3, n3) } : { done: false };
      });
      Ht(String.prototype, t2, c2[0]), Ht(na, i2, c2[1]);
    }
    n2 && Et(na[i2], "sham", true);
  }, oa = Mn.charAt, sa = function(t2, e2, r2) {
    return e2 + (r2 ? oa(t2, e2).length : 1);
  }, aa = o.TypeError, ca = function(t2, e2) {
    var r2 = t2.exec;
    if (T(r2)) {
      var n2 = rt(r2, t2, e2);
      return null !== n2 && tt(n2), n2;
    }
    if ("RegExp" === Gt(t2))
      return rt(ea, t2, e2);
    throw aa("RegExp#exec called on incompatible receiver");
  };
  ia("match", function(t2, e2, r2) {
    return [function(e3) {
      var r3 = y(this), n2 = null == e3 ? void 0 : ut(e3, t2);
      return n2 ? rt(n2, e3, r3) : new RegExp(e3)[t2](pr(r3));
    }, function(t3) {
      var n2 = tt(this), i2 = pr(t3), o2 = r2(e2, n2, i2);
      if (o2.done)
        return o2.value;
      if (!n2.global)
        return ca(n2, i2);
      var s2 = n2.unicode;
      n2.lastIndex = 0;
      for (var a2, c2 = [], l2 = 0; null !== (a2 = ca(n2, i2)); ) {
        var u2 = pr(a2[0]);
        c2[l2] = u2, "" === u2 && (n2.lastIndex = sa(i2, pe(n2.lastIndex), s2)), l2++;
      }
      return 0 === l2 ? null : c2;
    }];
  });
  var la = At.EXISTS, ua = mt.f, fa = Function.prototype, ha = g(fa.toString), da = /function\b(?:\s|\/\*[\S\s]*?\*\/|\/\/[^\n\r]*[\n\r]+)*([^\s(/]*)/, pa = g(da.exec);
  H && !la && ua(fa, "name", { configurable: true, get: function() {
    try {
      return pa(da, ha(this))[1];
    } catch (t2) {
      return "";
    }
  } });
  var va = Function.prototype, ga = va.apply, ba = va.call, ya = "object" == typeof Reflect && Reflect.apply || (f ? ba.bind(ga) : function() {
    return ba.apply(ga, arguments);
  }), ma = Math.floor, xa = g("".charAt), Ea = g("".replace), wa = g("".slice), Oa = /\$([$&'`]|\d{1,2}|<[^>]*>)/g, Sa = /\$([$&'`]|\d{1,2})/g, Aa = function(t2, e2, r2, n2, i2, o2) {
    var s2 = r2 + t2.length, a2 = n2.length, c2 = Sa;
    return void 0 !== i2 && (i2 = x(i2), c2 = Oa), Ea(o2, c2, function(o3, c3) {
      var l2;
      switch (xa(c3, 0)) {
        case "$":
          return "$";
        case "&":
          return t2;
        case "`":
          return wa(e2, 0, r2);
        case "'":
          return wa(e2, s2);
        case "<":
          l2 = i2[wa(c3, 1, -1)];
          break;
        default:
          var u2 = +c3;
          if (0 === u2)
            return o3;
          if (u2 > a2) {
            var f2 = ma(u2 / 10);
            return 0 === f2 ? o3 : f2 <= a2 ? void 0 === n2[f2 - 1] ? xa(c3, 1) : n2[f2 - 1] + xa(c3, 1) : o3;
          }
          l2 = n2[u2 - 1];
      }
      return void 0 === l2 ? "" : l2;
    });
  }, ka = V("replace"), Ta = Math.max, La = Math.min, Ra = g([].concat), _a = g([].push), ja = g("".indexOf), za = g("".slice), Ma = "$0" === "a".replace(/./, "$0"), Ca = !!/./[ka] && "" === /./[ka]("a", "$0");
  ia("replace", function(t2, e2, r2) {
    var n2 = Ca ? "$" : "$0";
    return [function(t3, r3) {
      var n3 = y(this), i2 = null == t3 ? void 0 : ut(t3, ka);
      return i2 ? rt(i2, t3, n3, r3) : rt(e2, pr(n3), t3, r3);
    }, function(t3, i2) {
      var o2 = tt(this), s2 = pr(t3);
      if ("string" == typeof i2 && -1 === ja(i2, n2) && -1 === ja(i2, "$<")) {
        var a2 = r2(e2, o2, s2, i2);
        if (a2.done)
          return a2.value;
      }
      var c2 = T(i2);
      c2 || (i2 = pr(i2));
      var l2 = o2.global;
      if (l2) {
        var u2 = o2.unicode;
        o2.lastIndex = 0;
      }
      for (var f2 = []; ; ) {
        var h2 = ca(o2, s2);
        if (null === h2)
          break;
        if (_a(f2, h2), !l2)
          break;
        "" === pr(h2[0]) && (o2.lastIndex = sa(s2, pe(o2.lastIndex), u2));
      }
      for (var d2, p2 = "", v2 = 0, g2 = 0; g2 < f2.length; g2++) {
        for (var b2 = pr((h2 = f2[g2])[0]), y2 = Ta(La(he(h2.index), s2.length), 0), m2 = [], x2 = 1; x2 < h2.length; x2++)
          _a(m2, void 0 === (d2 = h2[x2]) ? d2 : String(d2));
        var E2 = h2.groups;
        if (c2) {
          var w2 = Ra([b2], m2, y2, s2);
          void 0 !== E2 && _a(w2, E2);
          var O2 = pr(ya(i2, void 0, w2));
        } else
          O2 = Aa(b2, s2, y2, m2, E2, i2);
        y2 >= v2 && (p2 += za(s2, v2, y2) + O2, v2 = y2 + b2.length);
      }
      return p2 + za(s2, v2);
    }];
  }, !!u(function() {
    var t2 = /./;
    return t2.exec = function() {
      var t3 = [];
      return t3.groups = { a: "7" }, t3;
    }, "7" !== "".replace(t2, "$<a>");
  }) || !Ma || Ca);
  var Na = function(t2) {
    return Array.prototype.reduce.call(t2, function(t3, e2) {
      var r2 = e2.name.match(/data-simplebar-(.+)/);
      if (r2) {
        var n2 = r2[1].replace(/\W+(.)/g, function(t4, e3) {
          return e3.toUpperCase();
        });
        switch (e2.value) {
          case "true":
            t3[n2] = true;
            break;
          case "false":
            t3[n2] = false;
            break;
          case void 0:
            t3[n2] = true;
            break;
          default:
            t3[n2] = e2.value;
        }
      }
      return t3;
    }, {});
  };
  function Wa(t2) {
    return t2 && t2.ownerDocument && t2.ownerDocument.defaultView ? t2.ownerDocument.defaultView : window;
  }
  function Ia(t2) {
    return t2 && t2.ownerDocument ? t2.ownerDocument : document;
  }
  var Pa = null, Ba = null;
  function Da(t2) {
    if (null === Pa) {
      var e2 = Ia(t2);
      if (void 0 === e2)
        return Pa = 0;
      var r2 = e2.body, n2 = e2.createElement("div");
      n2.classList.add("simplebar-hide-scrollbar"), r2.appendChild(n2);
      var i2 = n2.getBoundingClientRect().right;
      r2.removeChild(n2), Pa = i2;
    }
    return Pa;
  }
  Ie && window.addEventListener("resize", function() {
    Ba !== window.devicePixelRatio && (Ba = window.devicePixelRatio, Pa = null);
  });
  var Fa = function() {
    function t2(e3, r2) {
      var n2 = this;
      this.onScroll = function() {
        var t3 = Wa(n2.el);
        n2.scrollXTicking || (t3.requestAnimationFrame(n2.scrollX), n2.scrollXTicking = true), n2.scrollYTicking || (t3.requestAnimationFrame(n2.scrollY), n2.scrollYTicking = true);
      }, this.scrollX = function() {
        n2.axis.x.isOverflowing && (n2.showScrollbar("x"), n2.positionScrollbar("x")), n2.scrollXTicking = false;
      }, this.scrollY = function() {
        n2.axis.y.isOverflowing && (n2.showScrollbar("y"), n2.positionScrollbar("y")), n2.scrollYTicking = false;
      }, this.onMouseEnter = function() {
        n2.showScrollbar("x"), n2.showScrollbar("y");
      }, this.onMouseMove = function(t3) {
        n2.mouseX = t3.clientX, n2.mouseY = t3.clientY, (n2.axis.x.isOverflowing || n2.axis.x.forceVisible) && n2.onMouseMoveForAxis("x"), (n2.axis.y.isOverflowing || n2.axis.y.forceVisible) && n2.onMouseMoveForAxis("y");
      }, this.onMouseLeave = function() {
        n2.onMouseMove.cancel(), (n2.axis.x.isOverflowing || n2.axis.x.forceVisible) && n2.onMouseLeaveForAxis("x"), (n2.axis.y.isOverflowing || n2.axis.y.forceVisible) && n2.onMouseLeaveForAxis("y"), n2.mouseX = -1, n2.mouseY = -1;
      }, this.onWindowResize = function() {
        n2.scrollbarWidth = n2.getScrollbarWidth(), n2.hideNativeScrollbar();
      }, this.hideScrollbars = function() {
        n2.axis.x.track.rect = n2.axis.x.track.el.getBoundingClientRect(), n2.axis.y.track.rect = n2.axis.y.track.el.getBoundingClientRect(), n2.isWithinBounds(n2.axis.y.track.rect) || (n2.axis.y.scrollbar.el.classList.remove(n2.classNames.visible), n2.axis.y.isVisible = false), n2.isWithinBounds(n2.axis.x.track.rect) || (n2.axis.x.scrollbar.el.classList.remove(n2.classNames.visible), n2.axis.x.isVisible = false);
      }, this.onPointerEvent = function(t3) {
        var e4, r3;
        n2.axis.x.track.rect = n2.axis.x.track.el.getBoundingClientRect(), n2.axis.y.track.rect = n2.axis.y.track.el.getBoundingClientRect(), (n2.axis.x.isOverflowing || n2.axis.x.forceVisible) && (e4 = n2.isWithinBounds(n2.axis.x.track.rect)), (n2.axis.y.isOverflowing || n2.axis.y.forceVisible) && (r3 = n2.isWithinBounds(n2.axis.y.track.rect)), (e4 || r3) && (t3.preventDefault(), t3.stopPropagation(), "mousedown" === t3.type && (e4 && (n2.axis.x.scrollbar.rect = n2.axis.x.scrollbar.el.getBoundingClientRect(), n2.isWithinBounds(n2.axis.x.scrollbar.rect) ? n2.onDragStart(t3, "x") : n2.onTrackClick(t3, "x")), r3 && (n2.axis.y.scrollbar.rect = n2.axis.y.scrollbar.el.getBoundingClientRect(), n2.isWithinBounds(n2.axis.y.scrollbar.rect) ? n2.onDragStart(t3, "y") : n2.onTrackClick(t3, "y"))));
      }, this.drag = function(e4) {
        var r3 = n2.axis[n2.draggedAxis].track, i2 = r3.rect[n2.axis[n2.draggedAxis].sizeAttr], o2 = n2.axis[n2.draggedAxis].scrollbar, s2 = n2.contentWrapperEl[n2.axis[n2.draggedAxis].scrollSizeAttr], a2 = parseInt(n2.elStyles[n2.axis[n2.draggedAxis].sizeAttr], 10);
        e4.preventDefault(), e4.stopPropagation();
        var c2 = (("y" === n2.draggedAxis ? e4.pageY : e4.pageX) - r3.rect[n2.axis[n2.draggedAxis].offsetAttr] - n2.axis[n2.draggedAxis].dragOffset) / (i2 - o2.size) * (s2 - a2);
        "x" === n2.draggedAxis && (c2 = n2.isRtl && t2.getRtlHelpers().isRtlScrollbarInverted ? c2 - (i2 + o2.size) : c2, c2 = n2.isRtl && t2.getRtlHelpers().isRtlScrollingInverted ? -c2 : c2), n2.contentWrapperEl[n2.axis[n2.draggedAxis].scrollOffsetAttr] = c2;
      }, this.onEndDrag = function(t3) {
        var e4 = Ia(n2.el), r3 = Wa(n2.el);
        t3.preventDefault(), t3.stopPropagation(), n2.el.classList.remove(n2.classNames.dragging), e4.removeEventListener("mousemove", n2.drag, true), e4.removeEventListener("mouseup", n2.onEndDrag, true), n2.removePreventClickId = r3.setTimeout(function() {
          e4.removeEventListener("click", n2.preventClick, true), e4.removeEventListener("dblclick", n2.preventClick, true), n2.removePreventClickId = null;
        });
      }, this.preventClick = function(t3) {
        t3.preventDefault(), t3.stopPropagation();
      }, this.el = e3, this.minScrollbarWidth = 20, this.options = Object.assign({}, t2.defaultOptions, r2), this.classNames = Object.assign({}, t2.defaultOptions.classNames, this.options.classNames), this.axis = { x: { scrollOffsetAttr: "scrollLeft", sizeAttr: "width", scrollSizeAttr: "scrollWidth", offsetSizeAttr: "offsetWidth", offsetAttr: "left", overflowAttr: "overflowX", dragOffset: 0, isOverflowing: true, isVisible: false, forceVisible: false, track: {}, scrollbar: {} }, y: { scrollOffsetAttr: "scrollTop", sizeAttr: "height", scrollSizeAttr: "scrollHeight", offsetSizeAttr: "offsetHeight", offsetAttr: "top", overflowAttr: "overflowY", dragOffset: 0, isOverflowing: true, isVisible: false, forceVisible: false, track: {}, scrollbar: {} } }, this.removePreventClickId = null, t2.instances.has(this.el) || (this.recalculate = Qi(this.recalculate.bind(this), 64), this.onMouseMove = Qi(this.onMouseMove.bind(this), 64), this.hideScrollbars = po(this.hideScrollbars.bind(this), this.options.timeout), this.onWindowResize = po(this.onWindowResize.bind(this), 64, { leading: true }), t2.getRtlHelpers = Fo(t2.getRtlHelpers), this.init());
    }
    t2.getRtlHelpers = function() {
      var e3 = document.createElement("div");
      e3.innerHTML = '<div class="hs-dummy-scrollbar-size"><div style="height: 200%; width: 200%; margin: 10px 0;"></div></div>';
      var r2 = e3.firstElementChild;
      document.body.appendChild(r2);
      var n2 = r2.firstElementChild;
      r2.scrollLeft = 0;
      var i2 = t2.getOffset(r2), o2 = t2.getOffset(n2);
      r2.scrollLeft = 999;
      var s2 = t2.getOffset(n2);
      return { isRtlScrollingInverted: i2.left !== o2.left && o2.left - s2.left != 0, isRtlScrollbarInverted: i2.left !== o2.left };
    }, t2.getOffset = function(t3) {
      var e3 = t3.getBoundingClientRect(), r2 = Ia(t3), n2 = Wa(t3);
      return { top: e3.top + (n2.pageYOffset || r2.documentElement.scrollTop), left: e3.left + (n2.pageXOffset || r2.documentElement.scrollLeft) };
    };
    var e2 = t2.prototype;
    return e2.init = function() {
      t2.instances.set(this.el, this), Ie && (this.initDOM(), this.setAccessibilityAttributes(), this.scrollbarWidth = this.getScrollbarWidth(), this.recalculate(), this.initListeners());
    }, e2.initDOM = function() {
      var t3 = this;
      if (Array.prototype.filter.call(this.el.children, function(e4) {
        return e4.classList.contains(t3.classNames.wrapper);
      }).length)
        this.wrapperEl = this.el.querySelector("." + this.classNames.wrapper), this.contentWrapperEl = this.options.scrollableNode || this.el.querySelector("." + this.classNames.contentWrapper), this.contentEl = this.options.contentNode || this.el.querySelector("." + this.classNames.contentEl), this.offsetEl = this.el.querySelector("." + this.classNames.offset), this.maskEl = this.el.querySelector("." + this.classNames.mask), this.placeholderEl = this.findChild(this.wrapperEl, "." + this.classNames.placeholder), this.heightAutoObserverWrapperEl = this.el.querySelector("." + this.classNames.heightAutoObserverWrapperEl), this.heightAutoObserverEl = this.el.querySelector("." + this.classNames.heightAutoObserverEl), this.axis.x.track.el = this.findChild(this.el, "." + this.classNames.track + "." + this.classNames.horizontal), this.axis.y.track.el = this.findChild(this.el, "." + this.classNames.track + "." + this.classNames.vertical);
      else {
        for (this.wrapperEl = document.createElement("div"), this.contentWrapperEl = document.createElement("div"), this.offsetEl = document.createElement("div"), this.maskEl = document.createElement("div"), this.contentEl = document.createElement("div"), this.placeholderEl = document.createElement("div"), this.heightAutoObserverWrapperEl = document.createElement("div"), this.heightAutoObserverEl = document.createElement("div"), this.wrapperEl.classList.add(this.classNames.wrapper), this.contentWrapperEl.classList.add(this.classNames.contentWrapper), this.offsetEl.classList.add(this.classNames.offset), this.maskEl.classList.add(this.classNames.mask), this.contentEl.classList.add(this.classNames.contentEl), this.placeholderEl.classList.add(this.classNames.placeholder), this.heightAutoObserverWrapperEl.classList.add(this.classNames.heightAutoObserverWrapperEl), this.heightAutoObserverEl.classList.add(this.classNames.heightAutoObserverEl); this.el.firstChild; )
          this.contentEl.appendChild(this.el.firstChild);
        this.contentWrapperEl.appendChild(this.contentEl), this.offsetEl.appendChild(this.contentWrapperEl), this.maskEl.appendChild(this.offsetEl), this.heightAutoObserverWrapperEl.appendChild(this.heightAutoObserverEl), this.wrapperEl.appendChild(this.heightAutoObserverWrapperEl), this.wrapperEl.appendChild(this.maskEl), this.wrapperEl.appendChild(this.placeholderEl), this.el.appendChild(this.wrapperEl);
      }
      if (!this.axis.x.track.el || !this.axis.y.track.el) {
        var e3 = document.createElement("div"), r2 = document.createElement("div");
        e3.classList.add(this.classNames.track), r2.classList.add(this.classNames.scrollbar), e3.appendChild(r2), this.axis.x.track.el = e3.cloneNode(true), this.axis.x.track.el.classList.add(this.classNames.horizontal), this.axis.y.track.el = e3.cloneNode(true), this.axis.y.track.el.classList.add(this.classNames.vertical), this.el.appendChild(this.axis.x.track.el), this.el.appendChild(this.axis.y.track.el);
      }
      this.axis.x.scrollbar.el = this.axis.x.track.el.querySelector("." + this.classNames.scrollbar), this.axis.y.scrollbar.el = this.axis.y.track.el.querySelector("." + this.classNames.scrollbar), this.options.autoHide || (this.axis.x.scrollbar.el.classList.add(this.classNames.visible), this.axis.y.scrollbar.el.classList.add(this.classNames.visible)), this.el.setAttribute("data-simplebar", "init");
    }, e2.setAccessibilityAttributes = function() {
      var t3 = this.options.ariaLabel || "scrollable content";
      this.contentWrapperEl.setAttribute("tabindex", "0"), this.contentWrapperEl.setAttribute("role", "region"), this.contentWrapperEl.setAttribute("aria-label", t3);
    }, e2.initListeners = function() {
      var t3 = this, e3 = Wa(this.el);
      this.options.autoHide && this.el.addEventListener("mouseenter", this.onMouseEnter), ["mousedown", "click", "dblclick"].forEach(function(e4) {
        t3.el.addEventListener(e4, t3.onPointerEvent, true);
      }), ["touchstart", "touchend", "touchmove"].forEach(function(e4) {
        t3.el.addEventListener(e4, t3.onPointerEvent, { capture: true, passive: true });
      }), this.el.addEventListener("mousemove", this.onMouseMove), this.el.addEventListener("mouseleave", this.onMouseLeave), this.contentWrapperEl.addEventListener("scroll", this.onScroll), e3.addEventListener("resize", this.onWindowResize);
      var r2 = false, n2 = null, i2 = e3.ResizeObserver || ks;
      this.resizeObserver = new i2(function() {
        r2 && null === n2 && (n2 = e3.requestAnimationFrame(function() {
          t3.recalculate(), n2 = null;
        }));
      }), this.resizeObserver.observe(this.el), this.resizeObserver.observe(this.contentEl), e3.requestAnimationFrame(function() {
        r2 = true;
      }), this.mutationObserver = new e3.MutationObserver(this.recalculate), this.mutationObserver.observe(this.contentEl, { childList: true, subtree: true, characterData: true });
    }, e2.recalculate = function() {
      var t3 = Wa(this.el);
      this.elStyles = t3.getComputedStyle(this.el), this.isRtl = "rtl" === this.elStyles.direction;
      var e3 = this.heightAutoObserverEl.offsetHeight <= 1, r2 = this.heightAutoObserverEl.offsetWidth <= 1, n2 = this.contentEl.offsetWidth, i2 = this.contentWrapperEl.offsetWidth, o2 = this.elStyles.overflowX, s2 = this.elStyles.overflowY;
      this.contentEl.style.padding = this.elStyles.paddingTop + " " + this.elStyles.paddingRight + " " + this.elStyles.paddingBottom + " " + this.elStyles.paddingLeft, this.wrapperEl.style.margin = "-" + this.elStyles.paddingTop + " -" + this.elStyles.paddingRight + " -" + this.elStyles.paddingBottom + " -" + this.elStyles.paddingLeft;
      var a2 = this.contentEl.scrollHeight, c2 = this.contentEl.scrollWidth;
      this.contentWrapperEl.style.height = e3 ? "auto" : "100%", this.placeholderEl.style.width = r2 ? n2 + "px" : "auto", this.placeholderEl.style.height = a2 + "px";
      var l2 = this.contentWrapperEl.offsetHeight;
      this.axis.x.isOverflowing = c2 > n2, this.axis.y.isOverflowing = a2 > l2, this.axis.x.isOverflowing = "hidden" !== o2 && this.axis.x.isOverflowing, this.axis.y.isOverflowing = "hidden" !== s2 && this.axis.y.isOverflowing, this.axis.x.forceVisible = "x" === this.options.forceVisible || true === this.options.forceVisible, this.axis.y.forceVisible = "y" === this.options.forceVisible || true === this.options.forceVisible, this.hideNativeScrollbar();
      var u2 = this.axis.x.isOverflowing ? this.scrollbarWidth : 0, f2 = this.axis.y.isOverflowing ? this.scrollbarWidth : 0;
      this.axis.x.isOverflowing = this.axis.x.isOverflowing && c2 > i2 - f2, this.axis.y.isOverflowing = this.axis.y.isOverflowing && a2 > l2 - u2, this.axis.x.scrollbar.size = this.getScrollbarSize("x"), this.axis.y.scrollbar.size = this.getScrollbarSize("y"), this.axis.x.scrollbar.el.style.width = this.axis.x.scrollbar.size + "px", this.axis.y.scrollbar.el.style.height = this.axis.y.scrollbar.size + "px", this.positionScrollbar("x"), this.positionScrollbar("y"), this.toggleTrackVisibility("x"), this.toggleTrackVisibility("y");
    }, e2.getScrollbarSize = function(t3) {
      if (void 0 === t3 && (t3 = "y"), !this.axis[t3].isOverflowing)
        return 0;
      var e3, r2 = this.contentEl[this.axis[t3].scrollSizeAttr], n2 = this.axis[t3].track.el[this.axis[t3].offsetSizeAttr], i2 = n2 / r2;
      return e3 = Math.max(~~(i2 * n2), this.options.scrollbarMinSize), this.options.scrollbarMaxSize && (e3 = Math.min(e3, this.options.scrollbarMaxSize)), e3;
    }, e2.positionScrollbar = function(e3) {
      if (void 0 === e3 && (e3 = "y"), this.axis[e3].isOverflowing) {
        var r2 = this.contentWrapperEl[this.axis[e3].scrollSizeAttr], n2 = this.axis[e3].track.el[this.axis[e3].offsetSizeAttr], i2 = parseInt(this.elStyles[this.axis[e3].sizeAttr], 10), o2 = this.axis[e3].scrollbar, s2 = this.contentWrapperEl[this.axis[e3].scrollOffsetAttr], a2 = (s2 = "x" === e3 && this.isRtl && t2.getRtlHelpers().isRtlScrollingInverted ? -s2 : s2) / (r2 - i2), c2 = ~~((n2 - o2.size) * a2);
        c2 = "x" === e3 && this.isRtl && t2.getRtlHelpers().isRtlScrollbarInverted ? c2 + (n2 - o2.size) : c2, o2.el.style.transform = "x" === e3 ? "translate3d(" + c2 + "px, 0, 0)" : "translate3d(0, " + c2 + "px, 0)";
      }
    }, e2.toggleTrackVisibility = function(t3) {
      void 0 === t3 && (t3 = "y");
      var e3 = this.axis[t3].track.el, r2 = this.axis[t3].scrollbar.el;
      this.axis[t3].isOverflowing || this.axis[t3].forceVisible ? (e3.style.visibility = "visible", this.contentWrapperEl.style[this.axis[t3].overflowAttr] = "scroll") : (e3.style.visibility = "hidden", this.contentWrapperEl.style[this.axis[t3].overflowAttr] = "hidden"), this.axis[t3].isOverflowing ? r2.style.display = "block" : r2.style.display = "none";
    }, e2.hideNativeScrollbar = function() {
      this.offsetEl.style[this.isRtl ? "left" : "right"] = this.axis.y.isOverflowing || this.axis.y.forceVisible ? "-" + this.scrollbarWidth + "px" : 0, this.offsetEl.style.bottom = this.axis.x.isOverflowing || this.axis.x.forceVisible ? "-" + this.scrollbarWidth + "px" : 0;
    }, e2.onMouseMoveForAxis = function(t3) {
      void 0 === t3 && (t3 = "y"), this.axis[t3].track.rect = this.axis[t3].track.el.getBoundingClientRect(), this.axis[t3].scrollbar.rect = this.axis[t3].scrollbar.el.getBoundingClientRect(), this.isWithinBounds(this.axis[t3].scrollbar.rect) ? this.axis[t3].scrollbar.el.classList.add(this.classNames.hover) : this.axis[t3].scrollbar.el.classList.remove(this.classNames.hover), this.isWithinBounds(this.axis[t3].track.rect) ? (this.showScrollbar(t3), this.axis[t3].track.el.classList.add(this.classNames.hover)) : this.axis[t3].track.el.classList.remove(this.classNames.hover);
    }, e2.onMouseLeaveForAxis = function(t3) {
      void 0 === t3 && (t3 = "y"), this.axis[t3].track.el.classList.remove(this.classNames.hover), this.axis[t3].scrollbar.el.classList.remove(this.classNames.hover);
    }, e2.showScrollbar = function(t3) {
      void 0 === t3 && (t3 = "y");
      var e3 = this.axis[t3].scrollbar.el;
      this.axis[t3].isVisible || (e3.classList.add(this.classNames.visible), this.axis[t3].isVisible = true), this.options.autoHide && this.hideScrollbars();
    }, e2.onDragStart = function(t3, e3) {
      void 0 === e3 && (e3 = "y");
      var r2 = Ia(this.el), n2 = Wa(this.el), i2 = this.axis[e3].scrollbar, o2 = "y" === e3 ? t3.pageY : t3.pageX;
      this.axis[e3].dragOffset = o2 - i2.rect[this.axis[e3].offsetAttr], this.draggedAxis = e3, this.el.classList.add(this.classNames.dragging), r2.addEventListener("mousemove", this.drag, true), r2.addEventListener("mouseup", this.onEndDrag, true), null === this.removePreventClickId ? (r2.addEventListener("click", this.preventClick, true), r2.addEventListener("dblclick", this.preventClick, true)) : (n2.clearTimeout(this.removePreventClickId), this.removePreventClickId = null);
    }, e2.onTrackClick = function(t3, e3) {
      var r2 = this;
      if (void 0 === e3 && (e3 = "y"), this.options.clickOnTrack) {
        var n2 = Wa(this.el);
        this.axis[e3].scrollbar.rect = this.axis[e3].scrollbar.el.getBoundingClientRect();
        var i2 = this.axis[e3].scrollbar.rect[this.axis[e3].offsetAttr], o2 = parseInt(this.elStyles[this.axis[e3].sizeAttr], 10), s2 = this.contentWrapperEl[this.axis[e3].scrollOffsetAttr], a2 = ("y" === e3 ? this.mouseY - i2 : this.mouseX - i2) < 0 ? -1 : 1, c2 = -1 === a2 ? s2 - o2 : s2 + o2;
        !function t4() {
          var i3, o3;
          -1 === a2 ? s2 > c2 && (s2 -= r2.options.clickOnTrackSpeed, r2.contentWrapperEl.scrollTo(((i3 = {})[r2.axis[e3].offsetAttr] = s2, i3)), n2.requestAnimationFrame(t4)) : s2 < c2 && (s2 += r2.options.clickOnTrackSpeed, r2.contentWrapperEl.scrollTo(((o3 = {})[r2.axis[e3].offsetAttr] = s2, o3)), n2.requestAnimationFrame(t4));
        }();
      }
    }, e2.getContentElement = function() {
      return this.contentEl;
    }, e2.getScrollElement = function() {
      return this.contentWrapperEl;
    }, e2.getScrollbarWidth = function() {
      try {
        return "none" === getComputedStyle(this.contentWrapperEl, "::-webkit-scrollbar").display || "scrollbarWidth" in document.documentElement.style || "-ms-overflow-style" in document.documentElement.style ? 0 : Da(this.el);
      } catch (t3) {
        return Da(this.el);
      }
    }, e2.removeListeners = function() {
      var t3 = this, e3 = Wa(this.el);
      this.options.autoHide && this.el.removeEventListener("mouseenter", this.onMouseEnter), ["mousedown", "click", "dblclick"].forEach(function(e4) {
        t3.el.removeEventListener(e4, t3.onPointerEvent, true);
      }), ["touchstart", "touchend", "touchmove"].forEach(function(e4) {
        t3.el.removeEventListener(e4, t3.onPointerEvent, { capture: true, passive: true });
      }), this.el.removeEventListener("mousemove", this.onMouseMove), this.el.removeEventListener("mouseleave", this.onMouseLeave), this.contentWrapperEl && this.contentWrapperEl.removeEventListener("scroll", this.onScroll), e3.removeEventListener("resize", this.onWindowResize), this.mutationObserver && this.mutationObserver.disconnect(), this.resizeObserver && this.resizeObserver.disconnect(), this.recalculate.cancel(), this.onMouseMove.cancel(), this.hideScrollbars.cancel(), this.onWindowResize.cancel();
    }, e2.unMount = function() {
      this.removeListeners(), t2.instances.delete(this.el);
    }, e2.isWithinBounds = function(t3) {
      return this.mouseX >= t3.left && this.mouseX <= t3.left + t3.width && this.mouseY >= t3.top && this.mouseY <= t3.top + t3.height;
    }, e2.findChild = function(t3, e3) {
      var r2 = t3.matches || t3.webkitMatchesSelector || t3.mozMatchesSelector || t3.msMatchesSelector;
      return Array.prototype.filter.call(t3.children, function(t4) {
        return r2.call(t4, e3);
      })[0];
    }, t2;
  }();
  return Fa.defaultOptions = { autoHide: true, forceVisible: false, clickOnTrack: true, clickOnTrackSpeed: 40, classNames: { contentEl: "simplebar-content", contentWrapper: "simplebar-content-wrapper", offset: "simplebar-offset", mask: "simplebar-mask", wrapper: "simplebar-wrapper", placeholder: "simplebar-placeholder", scrollbar: "simplebar-scrollbar", track: "simplebar-track", heightAutoObserverWrapperEl: "simplebar-height-auto-observer-wrapper", heightAutoObserverEl: "simplebar-height-auto-observer", visible: "simplebar-visible", horizontal: "simplebar-horizontal", vertical: "simplebar-vertical", hover: "simplebar-hover", dragging: "simplebar-dragging" }, scrollbarMinSize: 25, scrollbarMaxSize: 0, timeout: 1e3 }, Fa.instances = /* @__PURE__ */ new WeakMap(), Fa.initDOMLoadedElements = function() {
    document.removeEventListener("DOMContentLoaded", this.initDOMLoadedElements), window.removeEventListener("load", this.initDOMLoadedElements), Array.prototype.forEach.call(document.querySelectorAll("[data-simplebar]"), function(t2) {
      "init" === t2.getAttribute("data-simplebar") || Fa.instances.has(t2) || new Fa(t2, Na(t2.attributes));
    });
  }, Fa.removeObserver = function() {
    this.globalObserver.disconnect();
  }, Fa.initHtmlApi = function() {
    this.initDOMLoadedElements = this.initDOMLoadedElements.bind(this), "undefined" != typeof MutationObserver && (this.globalObserver = new MutationObserver(Fa.handleMutations), this.globalObserver.observe(document, { childList: true, subtree: true })), "complete" === document.readyState || "loading" !== document.readyState && !document.documentElement.doScroll ? window.setTimeout(this.initDOMLoadedElements) : (document.addEventListener("DOMContentLoaded", this.initDOMLoadedElements), window.addEventListener("load", this.initDOMLoadedElements));
  }, Fa.handleMutations = function(t2) {
    t2.forEach(function(t3) {
      Array.prototype.forEach.call(t3.addedNodes, function(t4) {
        1 === t4.nodeType && (t4.hasAttribute("data-simplebar") ? !Fa.instances.has(t4) && document.documentElement.contains(t4) && new Fa(t4, Na(t4.attributes)) : Array.prototype.forEach.call(t4.querySelectorAll("[data-simplebar]"), function(t5) {
          "init" !== t5.getAttribute("data-simplebar") && !Fa.instances.has(t5) && document.documentElement.contains(t5) && new Fa(t5, Na(t5.attributes));
        }));
      }), Array.prototype.forEach.call(t3.removedNodes, function(t4) {
        1 === t4.nodeType && ("init" === t4.getAttribute("data-simplebar") ? Fa.instances.has(t4) && !document.documentElement.contains(t4) && Fa.instances.get(t4).unMount() : Array.prototype.forEach.call(t4.querySelectorAll('[data-simplebar="init"]'), function(t5) {
          Fa.instances.has(t5) && !document.documentElement.contains(t5) && Fa.instances.get(t5).unMount();
        }));
      });
    });
  }, Fa.getOptions = Na, Ie && Fa.initHtmlApi(), Fa;
});
window.coreui = coreui;
