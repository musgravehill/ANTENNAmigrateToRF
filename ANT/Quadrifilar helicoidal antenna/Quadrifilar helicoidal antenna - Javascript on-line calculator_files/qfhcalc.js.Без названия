/*
    qfhcalc.js

    Copyright (C) 2000 John Coppens (jcoppens@usa.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
*/

function deltal(diam) {
  var tbl = [1.045, 1.053, 1.060, 1.064, 1.068, 1.070, 1.070, 1.071, 
             1.071, 1.070, 1.070, 1.070, 1.070, 1.069, 1.069, 1.068,
	     1.067]
  intv = parseInt(diam);
  return (tbl[intv] + (tbl[intv+1]-tbl[intv])*(diam-intv))
}

function deltaf(diam) {
  var tbl = [1.013, 1.014, 1.015, 1.016, 1.017, 1.018, 1.020, 1.022, 
             1.025, 1.027, 1.030, 1.033, 1.036, 1.041, 1.044, 1.049,
	     1.054]
  intv = parseInt(diam);
  return (tbl[intv] + (tbl[intv+1]-tbl[intv])*(diam-intv))
}

function compute(form) {
  freq = parseFloat(form.freq.value);
  wdiam = parseFloat(form.wdiam.value);
  wrad = parseFloat(form.wrad.value);
  ratio = parseFloat(form.ratio.value);
  turns = parseFloat(form.turns.value);
  nrwavel = parseFloat(form.nrwavel.value);

  var wavel = 300000/freq;
  document.getElementById('wavel').innerHTML = parseInt(wavel*10)/10;
  wd_eff = wdiam;
  if (wdiam > 15) wd_eff = 15;
  var wavelc = wavel * deltal(wd_eff);
  document.getElementById('wavelc').innerHTML = parseInt(wavelc*10)/10;
  bendcorr = 2*wrad - Math.PI*wrad/2;
  document.getElementById('bcorr').innerHTML = parseInt(bendcorr*10)/10;

  optdiam = 0.0088 * wavelc;
  document.getElementById('optdiam').innerHTML = parseInt(optdiam*10)/10;

  var total1 = wavelc * 1.026;
  var total1c = Number(total1) + 4*bendcorr;
  rad1 = 0.5 * total1c / 
           (1 + Math.sqrt(1/Math.pow(ratio,2) + Math.pow(turns*Math.PI,2)));
  vert1 = (total1c - 2*rad1)/2;
  var height1 = rad1 / ratio;

  document.getElementById('total1').innerHTML = parseInt(total1*10)/10;
  document.getElementById('total1c').innerHTML = parseInt(total1c*10)/10;
  document.getElementById('rad1').innerHTML = parseInt(rad1*10)/10;
  document.getElementById('rad1c').innerHTML = parseInt((rad1-2*wrad)*10)/10;
  document.getElementById('vert1').innerHTML = parseInt(vert1*10)/10;
  document.getElementById('vert1c').innerHTML = parseInt((vert1-2*wrad)*10)/10;
  document.getElementById('height1').innerHTML = parseInt(height1*10)/10;
  document.getElementById('height1val').value = parseInt(height1*10)/10;      
  document.getElementById('idiam1').innerHTML = parseInt( (rad1-wdiam)*10 )/10;

  total2 = wavelc * 0.975;
  total2c = Number(total2) + 4*bendcorr;
  rad2 = 0.5 * total2c /
           (1 + Math.sqrt(1/Math.pow(ratio,2) + Math.pow(turns*Math.PI,2)));
  vert2 = (total2c - 2*rad2)/2;
  height2 = rad2 / ratio;

  document.getElementById('total2').innerHTML = parseInt(total2*10)/10;
  document.getElementById('total2c').innerHTML = parseInt( total2c*10 )/10;
  document.getElementById('rad2').innerHTML = parseInt( rad2*10 )/10;
  document.getElementById('rad2c').innerHTML = parseInt( (rad2-2*wrad)*10 )/10;
  document.getElementById('vert2').innerHTML = parseInt( vert2*10 )/10;
  document.getElementById('vert2c').innerHTML = parseInt( (vert2-2*wrad)*10 )/10;
  document.getElementById('height2').innerHTML = parseInt( height2*10 )/10;
  document.getElementById('height2val').value = parseInt( height2*10 )/10;      
  document.getElementById('idiam2').innerHTML = parseInt( (rad2-wdiam)*10 )/10;
}
