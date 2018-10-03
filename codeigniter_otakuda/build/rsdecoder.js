function ReedSolomonDecoder(e) {
    this.field = e, this.decode = function (e, i) {
        for (var r = new GF256Poly(this.field, e), t = new Array(i), o = 0; o < t.length; o++)t[o] = 0;
        for (var l = !1, n = !0, o = 0; i > o; o++) {
            var a = r.evaluateAt(this.field.exp(l ? o + 1 : o));
            t[t.length - 1 - o] = a, 0 != a && (n = !1)
        }
        if (!n)for (var f = new GF256Poly(this.field, t), d = this.runEuclideanAlgorithm(this.field.buildMonomial(i, 1), f, i), s = d[0], h = d[1], u = this.findErrorLocations(s), c = this.findErrorMagnitudes(h, u, l), o = 0; o < u.length; o++) {
            var g = e.length - 1 - this.field.log(u[o]);
            if (0 > g)throw"ReedSolomonException Bad error location";
            e[g] = GF256.addOrSubtract(e[g], c[o])
        }
    }, this.runEuclideanAlgorithm = function (e, i, r) {
        if (e.Degree < i.Degree) {
            var t = e;
            e = i, i = t
        }
        for (var o = e, l = i, n = this.field.One, a = this.field.Zero, f = this.field.Zero, d = this.field.One; l.Degree >= Math.floor(r / 2);) {
            var s = o, h = n, u = f;
            if (o = l, n = a, f = d, o.Zero)throw"r_{i-1} was zero";
            l = s;
            for (var c = this.field.Zero, g = o.getCoefficient(o.Degree), v = this.field.inverse(g); l.Degree >= o.Degree && !l.Zero;) {
                var m = l.Degree - o.Degree, y = this.field.multiply(l.getCoefficient(l.Degree), v);
                c = c.addOrSubtract(this.field.buildMonomial(m, y)), l = l.addOrSubtract(o.multiplyByMonomial(m, y))
            }
            a = c.multiply1(n).addOrSubtract(h), d = c.multiply1(f).addOrSubtract(u)
        }
        var p = d.getCoefficient(0);
        if (0 == p)throw"ReedSolomonException sigmaTilde(0) was zero";
        var w = this.field.inverse(p), D = d.multiply2(w), A = l.multiply2(w);
        return new Array(D, A)
    }, this.findErrorLocations = function (e) {
        var i = e.Degree;
        if (1 == i)return new Array(e.getCoefficient(1));
        for (var r = new Array(i), t = 0, o = 1; 256 > o && i > t; o++)0 == e.evaluateAt(o) && (r[t] = this.field.inverse(o), t++);
        if (t != i)throw"Error locator degree does not match number of roots";
        return r
    }, this.findErrorMagnitudes = function (e, i, r) {
        for (var t = i.length, o = new Array(t), l = 0; t > l; l++) {
            for (var n = this.field.inverse(i[l]), a = 1, f = 0; t > f; f++)l != f && (a = this.field.multiply(a, GF256.addOrSubtract(1, this.field.multiply(i[f], n))));
            o[l] = this.field.multiply(e.evaluateAt(n), this.field.inverse(a)), r && (o[l] = this.field.multiply(o[l], n))
        }
        return o
    }
}