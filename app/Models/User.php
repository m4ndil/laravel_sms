<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     * wow
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

class Das {
  String? _leaveType;
  String? _startDate;
  String? _endDate;
  String? _requestDate;
  String? _reason;
  String? _status;
  String? _totalLeaveDays;

  Das(
      {String? leaveType,
      String? startDate,
      String? endDate,
      String? requestDate,
      String? reason,
      String? status,
      String? totalLeaveDays}) {
    if (leaveType != null) {
      this._leaveType = leaveType;
    }
    if (startDate != null) {
      this._startDate = startDate;
    }
    if (endDate != null) {
      this._endDate = endDate;
    }
    if (requestDate != null) {
      this._requestDate = requestDate;
    }
    if (reason != null) {
      this._reason = reason;
    }
    if (status != null) {
      this._status = status;
    }
    if (totalLeaveDays != null) {
      this._totalLeaveDays = totalLeaveDays;
    }
  }

  String? get leaveType => _leaveType;
  set leaveType(String? leaveType) => _leaveType = leaveType;
  String? get startDate => _startDate;
  set startDate(String? startDate) => _startDate = startDate;
  String? get endDate => _endDate;
  set endDate(String? endDate) => _endDate = endDate;
  String? get requestDate => _requestDate;
  set requestDate(String? requestDate) => _requestDate = requestDate;
  String? get reason => _reason;
  set reason(String? reason) => _reason = reason;
  String? get status => _status;
  set status(String? status) => _status = status;
  String? get totalLeaveDays => _totalLeaveDays;
  set totalLeaveDays(String? totalLeaveDays) =>
      _totalLeaveDays = totalLeaveDays;

  Das.fromJson(Map<String, dynamic> json) {
    _leaveType = json['leaveType'];
    _startDate = json['startDate'];
    _endDate = json['endDate'];
    _requestDate = json['requestDate'];
    _reason = json['reason'];
    _status = json['status'];
    _totalLeaveDays = json['totalLeaveDays'];
  }

  Map<String, dynamic> toJson() {
    final Map<String, dynamic> data = new Map<String, dynamic>();
    data['leaveType'] = this._leaveType;
    data['startDate'] = this._startDate;
    data['endDate'] = this._endDate;
    data['requestDate'] = this._requestDate;
    data['reason'] = this._reason;
    data['status'] = this._status;
    data['totalLeaveDays'] = this._totalLeaveDays;
    return data;
  }
}

